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

/** Message documentation (Message documentation)
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'accountinfo' => '{{doc-special|AccountInfo}}
{{Identical|Account information}}',
	'accountinfo-desc' => '{{doc-singularthey}}
{{desc|name=AccountInfo|url=http://www.mediawiki.org/wiki/Extension:AccountInfo}}',
	'accountinfo-ts' => 'Header for table column',
	'accountinfo-ip' => 'Header for table column.
{{Identical|IP address}}',
	'accountinfo-ua' => 'Header for table column.
{{Identical|User agent}}',
	'accountinfo-xff' => 'Header for table column',
	'accountinfo-none' => 'Text in table row when no information is available',
	'accountinfo-recentchanges' => 'Section header',
	'accountinfo-length-rc' => 'Text explaining how long information is retained in the recentchanges table.

Parameters:
* $1 - the formatted time length
See also:
* {{msg-mw|Accountinfo-length-cu}}',
	'accountinfo-checkuser' => 'Section header',
	'accountinfo-length-cu' => 'Text explaining how long information is retained in the CheckUser table.

Parameters:
* $1 - the formatted time length.
See also:
* {{msg-mw|Accountinfo-length-rc}}',
	'accountinfo-user-agent' => 'Text used to format User-Agents. Parameters:
* $1 - the browser name in English
* $2 - the version (unformatted number)
* $3 - the platform (Macintosh, Windows, etc.)',
	'accountinfo-now' => 'Text shown in "Timestamp" column to represent current information.',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'accountinfo' => 'Benutzerkonteninformation',
	'accountinfo-desc' => 'Ermöglicht die Ansicht gespeicherter privater Informationen über andere Benutzer',
	'accountinfo-ts' => 'Zeitstempel',
	'accountinfo-ip' => 'IP-Adresse',
	'accountinfo-ua' => 'Benutzeragent',
	'accountinfo-xff' => 'XFF-Header',
	'accountinfo-recentchanges' => 'Informationen über „Letzte Änderungen“',
	'accountinfo-length-rc' => 'Die Informationen werden bereitgestellt für $1.',
	'accountinfo-checkuser' => 'Informationen über CheckUser',
	'accountinfo-length-cu' => 'Die Informationen werden bereitgestellt für $1.',
	'accountinfo-user-agent' => '$1 $2 auf $3',
	'accountinfo-now' => 'Jetzt',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'accountinfo' => 'Informations du compte',
	'accountinfo-desc' => 'Permet à un utilisateur de voir des informations privées stockées sur lui',
	'accountinfo-ts' => 'Horodatage',
	'accountinfo-ip' => 'Adresse IP',
	'accountinfo-ua' => 'Agent utilisateur',
	'accountinfo-xff' => 'Entête XFF',
	'accountinfo-recentchanges' => 'Information dans les modifications récentes',
	'accountinfo-length-rc' => 'L’information est conservée pour $1.',
	'accountinfo-checkuser' => 'Information dans CheckUser',
	'accountinfo-length-cu' => 'L’information est conservée pour $1.',
	'accountinfo-user-agent' => '$1 $2 sur $3',
	'accountinfo-now' => 'Maintenant',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'accountinfo' => 'アカウント情報',
	'accountinfo-desc' => '利用者についての格納されている非公開情報を利用者自身が閲覧できるようにする',
	'accountinfo-ip' => 'IP アドレス',
	'accountinfo-ua' => 'ユーザーエージェント',
	'accountinfo-xff' => 'XFF ヘッダー',
);

/** Dutch (Nederlands)
 * @author JurgenNL
 * @author Sjoerddebruin
 */
$messages['nl'] = array(
	'accountinfo' => 'Accountgegevens',
	'accountinfo-ts' => 'Tijdstip',
	'accountinfo-ip' => 'IP-adres',
	'accountinfo-ua' => 'Useragent',
	'accountinfo-user-agent' => '$1 $2 op $3',
	'accountinfo-now' => 'Nu',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'accountinfo-now' => 'Mò',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'accountinfo' => 'Сведения об учётной записи',
	'accountinfo-desc' => 'Позволяет участнику посмотреть сохранённые личные сведения о нём',
	'accountinfo-ts' => 'Дата/время',
	'accountinfo-ip' => 'IP-адрес',
	'accountinfo-ua' => 'Браузер',
	'accountinfo-xff' => 'XFF-заголовок',
	'accountinfo-length-rc' => 'Информация хранится за $1.',
	'accountinfo-length-cu' => 'Информация хранится за $1.',
	'accountinfo-user-agent' => '$1 $2 в $3',
	'accountinfo-now' => 'Только что',
);
