<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

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
