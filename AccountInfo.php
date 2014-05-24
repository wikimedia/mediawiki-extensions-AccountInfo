<?php

/**
 * AccountInfo extension
 * Lets users see private info stored about them
 *
 * @license GPL v2+
 * Also includes MIT licensed code
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'AccountInfo',
	'author' => array( 'Kunal Mehta', 'Benjamin Lees' ),
	'url' => 'https://www.mediawiki.org/wiki/Extension:AccountInfo',
	'descriptionmsg' => 'accountinfo-desc',
	'version' => '0.2.0',
);

$wgAutoloadClasses['AccountInfo'] = __DIR__ . '/AccountInfo.body.php';
$wgAutoloadClasses['SpecialAccountInfo'] = __DIR__ . '/SpecialAccountInfo.php';
$wgAutoloadClasses['TableBuilder'] = __DIR__ . '/includes/TableBuilder.php';

// UA Parser
$wgAutoloadClasses['UAParser\AbstractParser'] = __DIR__ . '/UAParser/AbstractParser.php';
$wgAutoloadClasses['UAParser\DeviceParser'] = __DIR__ . '/UAParser/DeviceParser.php';
$wgAutoloadClasses['UAParser\OperatingSystemParser'] = __DIR__ . '/UAParser/OperatingSystemParser.php';
$wgAutoloadClasses['UAParser\Parser'] = __DIR__ . '/UAParser/Parser.php';
$wgAutoloadClasses['UAParser\UserAgentParser'] = __DIR__ . '/UAParser/UserAgentParser.php';
$wgAutoloadClasses['UAParser\Result\AbstractClient'] = __DIR__ . '/UAParser/Result/AbstractClient.php';
$wgAutoloadClasses['UAParser\Result\AbstractSoftware'] = __DIR__ . '/UAParser/Result/AbstractSoftware.php';
$wgAutoloadClasses['UAParser\Result\AbstractVersionedSoftware'] = __DIR__ . '/UAParser/Result/AbstractVersionedSoftware.php';
$wgAutoloadClasses['UAParser\Result\Client'] = __DIR__ . '/UAParser/Result/Client.php';
$wgAutoloadClasses['UAParser\Result\Device'] = __DIR__ . '/UAParser/Result/Device.php';
$wgAutoloadClasses['UAParser\Result\OperatingSystem'] = __DIR__ . '/UAParser/Result/OperatingSystem.php';
$wgAutoloadClasses['UAParser\Result\UserAgent'] = __DIR__ . '/UAParser/Result/UserAgent.php';
$wgAutoloadClasses['UAParser\Exception\DomainException'] = __DIR__ . '/UAParser/Exception/DomainException.php';
$wgAutoloadClasses['UAParser\Exception\FetcherException'] = __DIR__ . '/UAParser/Exception/FetcherException.php';
$wgAutoloadClasses['UAParser\Exception\FileNotFoundException'] = __DIR__ . '/UAParser/Exception/FileNotFoundException.php';
$wgAutoloadClasses['UAParser\Exception\InvalidArgumentException'] = __DIR__ . '/UAParser/Exception/InvalidArgumentException.php';
$wgAutoloadClasses['UAParser\Exception\ReaderException'] = __DIR__ . '/UAParser/Exception/ReaderException.php';


$wgSpecialPages['AccountInfo'] = 'SpecialAccountInfo';
$wgMessagesDirs['AccountInfo'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['AccountInfo'] = __DIR__ . '/AccountInfo.i18n.php';
$wgExtensionMessagesFiles['AccountInfoAlias'] = __DIR__ . '/AccountInfo.alias.php';
$wgResourceModules['ext.AccountInfo.special'] = array(
	'styles' => 'ext.AccountInfo.special.css',
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'AccountInfo/modules',
);
$wgResourceModules['ext.AccountInfo.special.js'] = array(
	'scripts' => 'ext.AccountInfo.special.js',
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => 'AccountInfo/modules',
);
