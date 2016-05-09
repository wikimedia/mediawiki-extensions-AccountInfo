<?php

/**
 * AccountInfo extension
 * Lets users see private info stored about them
 *
 * @license GPL v2+
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgExtensionCredits['other'][] = [
	'path' => __FILE__,
	'name' => 'AccountInfo',
	'author' => [ 'Kunal Mehta', 'Benjamin Lees', 'Prateek Saxena' ],
	'url' => 'https://www.mediawiki.org/wiki/Extension:AccountInfo',
	'descriptionmsg' => 'accountinfo-desc',
	'version' => '0.2.0',
	'license-name' => 'GPL-2.0+',
];

$wgAutoloadClasses['AccountInfo'] = __DIR__ . '/AccountInfo.body.php';
$wgAutoloadClasses['SpecialAccountInfo'] = __DIR__ . '/SpecialAccountInfo.php';
$wgAutoloadClasses['TableBuilder'] = __DIR__ . '/includes/TableBuilder.php';

$wgSpecialPages['AccountInfo'] = 'SpecialAccountInfo';
$wgMessagesDirs['AccountInfo'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['AccountInfoAlias'] = __DIR__ . '/AccountInfo.alias.php';
$wgResourceModules['ext.AccountInfo.special'] = [
	'styles' => 'ext.AccountInfo.special.css',
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'AccountInfo/modules',
];
