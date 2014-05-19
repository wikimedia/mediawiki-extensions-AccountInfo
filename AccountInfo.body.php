<?php

class AccountInfo {

	/**
	 * Whether CheckUser extension is installed
	 * @return bool
	 */
	public static function isCUInstalled() {
		// Some other extension has a class named 'CheckUser'
		// so we'll use a hopefully more unique name
		return class_exists( 'CheckUserHooks' );
	}

	/**
	 * Whether IP's are stored in the RecentChanges table
	 * @return bool
	 */
	public static function areIPsInRC() {
		global $wgPutIPinRC;
		return $wgPutIPinRC;
	}

	public static function getUserAgent( WebRequest $req ) {
		return $req->getHeader( 'User-Agent' );
	}

	/**
	 * Gets the XFF IP from a given WebRequest
	 * Depends on CU being installed
	 * @param WebRequest $req
	 * @return string
	 */
	public static function getXFF( WebRequest $req ) {
		if ( !self::isCUInstalled() ) {
			// Should not be called, but be safe.
			return '';
		}
		list( $xff_ip, $isSquidOnly ) = CheckUserHooks::getClientIPfromXFF(
			$req->getHeader( 'X-Forwarded-For' )
		);

		return ( $xff_ip && !$isSquidOnly ) ? $xff_ip : '';
	}

	/**
	 * @return \UAParser\Parser
	 */
	private static function getUAParser() {
		static $parser;
		if ( $parser ) {
			return $parser;
		}
		global $wgMemc;
		$data = $wgMemc->get( 'accountinfo-ua-regexes' );
		$mtime = filemtime( __DIR__ . '/UAParser/regexes.json' );
		if ( $data === false || $data['mtime'] !== $mtime ) {
			$json = file_get_contents( __DIR__ . '/UAParser/regexes.json' );
			$regexes = FormatJson::decode( $json );
			$wgMemc->set( 'accountinfo-ua-regexes', array(
				'mtime' => $mtime,
				'regexes' => $regexes,
			) );
		} else {
			$regexes = $data['regexes'];
		}
		$parser = new \UAParser\Parser( wfObjectToArray( $regexes ) );
		return $parser;
	}

	/**
	 * @param Language $lang
	 * @param string $ua
	 * @return String|bool
	 */
	public static function getHumanReadableUA( Language $lang, $ua ) {
		$result = self::getUAParser()->parse( $ua );
		return $lang->commaList( array( $result->ua->toString(), $result->os->toString() ) );
	}
}
