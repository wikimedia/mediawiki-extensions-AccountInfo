<?php

class AccountInfo {

	/**
	 * Whether CheckUser extension is installed
	 * @return bool
	 */
	public static function isCUInstalled() {
		return ExtensionRegistry::getInstance()->isLoaded( 'CheckUser' );
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
}
