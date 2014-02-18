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
		$ua = AccountInfo::getHumanReadableUA( $this, $ua );
		if ( !$ua ) {
			$ua = $this->msg( 'accountinfo-none' )->text();
		}
		return $ua;
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

		// Current info
		$this->addHeader( 'accountinfo-current' );
		$out->addHTML( Xml::buildTable( array( array(
				$req->getIP(),
				$this->formatUA( AccountInfo::getUserAgent( $req ) ),
				$this->formatXFF( AccountInfo::getXFF( $req ) )
		) ), array(), array(
			$this->msg( 'accountinfo-ip' )->escaped(),
			$this->msg( 'accountinfo-ua' )->escaped(),
			$this->msg( 'accountinfo-xff' )->escaped()
		) ) );

		// Check RecentChanges...
		if ( AccountInfo::areIPsInRC() ) {
			$this->addHeader( 'accountinfo-recentchanges' );
			global $wgRCMaxAge;
			$out->addHTML( $this->msg( 'accountinfo-length-rc' )->timeperiodParams( $wgRCMaxAge )->escaped() );
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
			$out->addHTML( Xml::buildTable( $rows, array(), array( $this->msg( 'accountinfo-ip' )->escaped() ) ) );
		}

		// Now CheckUser...
		if ( AccountInfo::isCUInstalled() ) {
			$this->addHeader( 'accountinfo-checkuser' );
			global $wgCUDMaxAge;
			$out->addHTML( $this->msg( 'accountinfo-length-cu' )->timeperiodParams( $wgCUDMaxAge )->escaped() );
			$rows = wfGetDB( DB_SLAVE )->select(
				'cu_changes',
				array( 'DISTINCT cuc_ip', 'cuc_agent', 'cuc_xff' ), // the DISTINCT applies to all columns
				array( 'cuc_user' => $user->getId() ),
				__METHOD__
			);
			$us = $this;
			$rows = array_map( function( $arr ) use ( $us ) {
				return array(
					$arr->cuc_ip,
					$us->formatUA( $arr->cuc_agent ),
					$us->formatXFF( $arr->cuc_xff ),
				);
			}, iterator_to_array( $rows ) );
			$out->addHTML( Xml::buildTable( $rows, array(), array(
				$this->msg( 'accountinfo-ip' )->escaped(),
				$this->msg( 'accountinfo-ua' )->escaped(),
				$this->msg( 'accountinfo-xff' )->escaped(),
			) ) );
		}
	}

	/**
	 * @param string $key message key
	 */
	protected function addHeader( $key ) {
		$this->getOutput()->addHTML(
			Html::element( 'h2', array(), $this->msg( $key )->text() )
		);
	}
}
