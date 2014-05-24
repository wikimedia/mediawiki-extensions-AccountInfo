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
	 * @param SpecialPage|IContextSource $ctx something that implements ->msg()
	 * @param string $ua
	 * @return String|bool
	 */
	public static function getHumanReadableUA( $ctx, $ua ) {
		// No autoloader for functions :(
		require_once( __DIR__ . '/UserAgentParser.php' );
		$parsed = parse_user_agent( $ua );
		if ( !$parsed['platform'] || !$parsed['browser'] || !$parsed['version'] ) {
			// @todo return partial results
			return false;
		}
		return $ctx->msg( 'accountinfo-user-agent' )
			->params( $parsed['browser'], $parsed['version'], $parsed['platform'] )
			->text();
	}
}
