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

	public function formatTime( $ts ) {
		return $this->getLanguage()->formatTimePeriod( $ts,
			[ 'avoid' => 'avoidminutes', 'noabbrevs' => true ]
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

		// Check RecentChanges, only if CU is not installed...
		if ( AccountInfo::areIPsInRC() && !AccountInfo::isCUInstalled() ) {
			global $wgRCMaxAge;
			$out->addHTML( $this->msg( 'accountinfo-length-rc' )
				->rawParams( $this->formatTime( $wgRCMaxAge ) )
				->parseAsBlock()
			);
			// Check the table...
			$rows = wfGetDB( DB_REPLICA )->select(
				'recentchanges',
				'DISTINCT(rc_ip) AS ip',
				[ 'rc_user' => $user->getId() ],
				__METHOD__
			);
			// Convert for table-fication...
			$outRows = [];
			foreach ( $rows as $row ) {
				$outRows[] = [ $row->ip ];
			}
			// Put current info on top.
			$outRows = array_merge( [ 'mw-accountinfo-current' => [ $req->getIP() ] ], $outRows );
			$out->addHTML( TableBuilder::buildTable(
				$outRows,
				[ $this->msg( 'accountinfo-ip' )->parse() ]
			) );
		}

		// Now CheckUser...
		if ( AccountInfo::isCUInstalled() ) {
			global $wgCUDMaxAge;
			$out->addHTML( $this->msg( 'accountinfo-length-cu' )
				->rawParams( $this->formatTime( $wgCUDMaxAge ) )
				->parseAsBlock()
			);
			$rows = wfGetDB( DB_REPLICA )->select(
				'cu_changes',
				[ 'cuc_timestamp', 'cuc_ip', 'cuc_agent', 'cuc_xff' ],
				[ 'cuc_user' => $user->getId() ],
				__METHOD__,
				[ 'GROUP BY' => 'cuc_ip, cuc_agent, cuc_xff' ]
			);
			$outRows = [];
			foreach ( $rows as $row ) {
				$outRows[] = [
					$this->getLanguage()->formatExpiry( $row->cuc_timestamp ),
					$row->cuc_ip,
					'mw-accountinfo-useragent' => htmlspecialchars( $row->cuc_agent ),
					$this->formatXFF( $row->cuc_xff ),
				];
			}
			// Put current info on top.
			$outRows = array_merge( [ 'mw-accountinfo-current' => [
				$this->msg( 'accountinfo-now' )->parse(),
				$req->getIP(),
				'mw-accountinfo-useragent' => htmlspecialchars( AccountInfo::getUserAgent( $req ) ),
				$this->formatXFF( AccountInfo::getXFF( $req ) ),
			] ], $outRows );
			$out->addHTML( TableBuilder::buildTable( $outRows, [
				$this->msg( 'accountinfo-ts' )->parse(),
				$this->msg( 'accountinfo-ip' )->parse(),
				$this->msg( 'accountinfo-ua' )->parse(),
				$this->msg( 'accountinfo-xff' )->parse(),
			] ) );
		}
	}

}
