<?php

/**
 * @todo figure out if this special page should require a token
 */
class SpecialAccountInfo extends SpecialPage {
	public function __construct() {
		parent::__construct( 'AccountInfo' );
	}

	/**
	 * Only public so it can be called via a closure
	 * @param string $xff
	 * @return String
	 */
	public function formatXFF( $xff ) {
		if ( !$xff ) {
			$xff = $this->msg( 'accountinfo-none' )->text();
		}
		return $xff;
	}

	public function formatUA( $ua ) {
		$human = AccountInfo::getHumanReadableUA( $this, $ua );
		if ( $human ) {
			$return = $human . Html::element(
					'div',
					array( 'class' => 'mw-accountinfo-useragent' ),
					$ua
				);
		} else {
			$return = $this->msg( 'accountinfo-none' )->text();
		}
		return $return;
	}

	public function formatTime( $ts ) {
		return $this->getLanguage()->formatTimePeriod( $ts,
			array( 'avoid' => 'avoidminutes', 'noabbrevs' => true )
		);
	}

	public function execute( $par ) {
		$user = $this->getUser();
		$out = $this->getOutput();
		$req = $this->getRequest();

		if ( !$user->isLoggedIn() ) {
			throw new UserNotLoggedIn;
		}

		$this->setHeaders();
		$this->outputHeader();
		$this->checkPermissions();
		$out->addModuleStyles( 'ext.AccountInfo.special' );
		$out->addModules( 'ext.AccountInfo.special.js' );

		// Check RecentChanges, only if CU is not installed...
		if ( AccountInfo::areIPsInRC() && !AccountInfo::isCUInstalled() ) {
			global $wgRCMaxAge;
			$out->addHTML( $this->msg( 'accountinfo-length-rc' )
				->rawParams( $this->formatTime( $wgRCMaxAge ) )
				->parseAsBlock()
			);
			// Check the table...
			$rows = wfGetDB( DB_SLAVE )->select(
				'recentchanges',
				'DISTINCT(rc_ip) AS ip',
				array( 'rc_user' => $user->getId() ),
				__METHOD__
			);
			// Convert for table-fication...
			$rows = array_map( function( $arr ) {
				/** @var stdClass $arr */
				return array( $arr->ip );
			}, iterator_to_array( $rows ) );
			// Put current info on top.
			$rows = array_merge( array( 'mw-accountinfo-current' => array( $req->getIP() ) ), $rows );
			$out->addHTML( TableBuilder::buildTable( $rows, array( $this->msg( 'accountinfo-ip' )->parse() ) ) );
		}

		// Now CheckUser...
		if ( AccountInfo::isCUInstalled() ) {
			global $wgCUDMaxAge;
			$out->addHTML( $this->msg( 'accountinfo-length-cu' )
				->rawParams( $this->formatTime( $wgCUDMaxAge ) )
				->parseAsBlock()
			);
			$rows = wfGetDB( DB_SLAVE )->select(
				'cu_changes',
				array( 'cuc_timestamp', 'cuc_ip', 'cuc_agent', 'cuc_xff' ),
				array( 'cuc_user' => $user->getId() ),
				__METHOD__,
				array( 'GROUP BY' => 'cuc_ip, cuc_agent, cuc_xff' )
			);
			$us = $this;
			$rows = array_map( function( $arr ) use ( $us ) {
				return array(
					$us->getLanguage()->formatExpiry( $arr->cuc_timestamp ),
					$arr->cuc_ip,
					'mw-accountinfo-useragent' => $us->formatUA( $arr->cuc_agent ),
					$us->formatXFF( $arr->cuc_xff ),
				);
			}, iterator_to_array( $rows ) );
			// Put current info on top.
			$rows = array_merge( array( 'mw-accountinfo-current' => array(
				$this->msg( 'accountinfo-now' )->parse(),
				$req->getIP(),
				'mw-accountinfo-useragent' => $this->formatUA( AccountInfo::getUserAgent( $req ) ),
				$this->formatXFF( AccountInfo::getXFF( $req ) ),
			) ), $rows );
			$out->addHTML( TableBuilder::buildTable( $rows, array(
				$this->msg( 'accountinfo-ts' )->parse(),
				$this->msg( 'accountinfo-ip' )->parse(),
				$this->msg( 'accountinfo-ua' )->parse(),
				$this->msg( 'accountinfo-xff' )->parse(),
			) ) );
		}
	}

}
