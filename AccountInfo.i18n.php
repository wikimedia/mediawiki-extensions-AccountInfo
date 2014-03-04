<?php
/**
 * AccountInfo extension
 *
 * @file
 * @ingroup Extensions
 * @license GPL v2+
 */

$messages = array();

$messages['en'] = array(
	'accountinfo' => 'Account information',
	'accountinfo-desc' => 'Allows a user to see stored private information about them',
	'accountinfo-ts' => 'Timestamp',
	'accountinfo-ip' => 'IP address',
	'accountinfo-ua' => 'User agent',
	'accountinfo-xff' => 'XFF header',
	'accountinfo-none' => '–',
	'accountinfo-recentchanges' => 'Information in RecentChanges',
	'accountinfo-length-rc' => 'Information is retained for $1.',
	'accountinfo-checkuser' => 'Information in CheckUser',
	'accountinfo-length-cu' => 'Information is retained for $1.',
	'accountinfo-user-agent' => '$1 $2 on $3',
	'accountinfo-now' => 'Now',
);

$messages['qqq'] = array(
	'accountinfo' => '{{doc-special|AccountInfo}}',
	'accountinfo-desc' => '{{desc|name=AccountInfo|url=http://www.mediawiki.org/wiki/Extension:AccountInfo}}',
	'accountinfo-ts' => 'Header for table column',
	'accountinfo-ip' => 'Header for table column',
	'accountinfo-ua' => 'Header for table column',
	'accountinfo-xff' => 'Header for table column',
	'accountinfo-none' => 'Text in table row when no information is available',
	'accountinfo-recentchanges' => 'Section header',
	'accountinfo-length-rc' => 'Text explaining how long information is retained in the recentchanges table.

* $1 is the formatted time length.',
	'accountinfo-checkuser' => 'Section header',
	'accountinfo-length-cu' => 'Text explaining how long information is retained in the CheckUser table.

* $1 is the formatted time length.',
	'accountinfo-user-agent' => 'Text used to format User-Agents.
* $1 is the browser name in English
* $2 is the version (unformatted number)
* $3 is the platform (Macintosh, Windows, etc.)',
	'accountinfo-now' => 'Text shown in "Timestamp" column to represent current information.',
);
