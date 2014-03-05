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
	'accountinfo-ts' => 'Header for table column.
{{Identical|Timestamp}}',
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

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'accountinfo' => 'Información de la cuenta',
	'accountinfo-desc' => 'Permite que los usuarios vean la información privada propia',
	'accountinfo-ts' => "Marca d'hora",
	'accountinfo-ip' => 'Direición IP',
	'accountinfo-ua' => "Axente d'usuariu",
	'accountinfo-xff' => 'Testera XFF',
	'accountinfo-recentchanges' => 'Información en RecentChanges',
	'accountinfo-length-rc' => 'La información guárdase demientres $1.',
	'accountinfo-checkuser' => 'Información en CheckUser',
	'accountinfo-length-cu' => 'La información guárdase demientres $1.',
	'accountinfo-user-agent' => '$1 $2 en $3',
	'accountinfo-now' => 'Agora',
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

/** Zazaki (Zazaki)
 * @author Mirzali
 */
$messages['diq'] = array(
	'accountinfo-ip' => 'Adresa IPy',
	'accountinfo-ua' => 'Temsilkarê karberi',
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
	'accountinfo-ts' => '日時',
	'accountinfo-ip' => 'IP アドレス',
	'accountinfo-ua' => 'ユーザーエージェント',
	'accountinfo-xff' => 'XFF ヘッダー',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'accountinfo-ts' => 'Zäitstempel',
	'accountinfo-ip' => 'IP-Adress',
	'accountinfo-now' => 'Elo',
);

/** Lithuanian (lietuvių)
 * @author Mantak111
 */
$messages['lt'] = array(
	'accountinfo' => 'Paskyros informacija',
	'accountinfo-ip' => 'IP Adresas',
	'accountinfo-now' => 'Dabar',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'accountinfo' => 'Информации за сметката',
	'accountinfo-desc' => 'Му овозможува на корисникот да гледа зачувани лични податоци за него',
	'accountinfo-ts' => 'Време и датум',
	'accountinfo-ip' => 'IP-адреса',
	'accountinfo-ua' => 'Кориснички извршител',
	'accountinfo-xff' => 'XFF-заглавје',
	'accountinfo-recentchanges' => 'Информации во „Скорешни промени“',
	'accountinfo-length-rc' => 'Информациите се чуваат $1.',
	'accountinfo-checkuser' => 'Информации во Проверката на корисници (CheckUser)',
	'accountinfo-length-cu' => 'Информациите се чуваат $1.',
	'accountinfo-user-agent' => '$1 $2 во $3',
	'accountinfo-now' => 'Сега',
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
	'accountinfo-recentchanges' => 'Информация в Свежих правках',
	'accountinfo-length-rc' => 'Информация хранится за $1.',
	'accountinfo-checkuser' => 'Информация в CheckUser',
	'accountinfo-length-cu' => 'Информация хранится за $1.',
	'accountinfo-user-agent' => '$1 $2 в $3',
	'accountinfo-now' => 'Только что',
);

/** Scots (Scots)
 * @author John Reid
 */
$messages['sco'] = array(
	'accountinfo' => 'Accoont information',
	'accountinfo-desc' => 'Permits ae uiser tae see stored private information aneat theim',
	'accountinfo-ts' => 'Timestamp',
	'accountinfo-ip' => 'IP address',
	'accountinfo-ua' => 'Uiser agent',
	'accountinfo-xff' => 'XFF heider',
	'accountinfo-recentchanges' => 'Information in RecentChynges',
	'accountinfo-length-rc' => 'Information is retained fer $1.',
	'accountinfo-checkuser' => 'Information in CheckUiser',
	'accountinfo-length-cu' => 'Information is retained fer $1.',
	'accountinfo-user-agent' => '$1 $2 oan $3',
	'accountinfo-now' => 'Nou',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'accountinfo' => 'ఖాతా సమాచారం',
	'accountinfo-ts' => 'కాలముద్ర',
	'accountinfo-ip' => 'ఐపీ చిరునామా',
	'accountinfo-ua' => 'వాడుకరి ఏజెంటు',
	'accountinfo-now' => 'ఇప్పుడే',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 */
$messages['uk'] = array(
	'accountinfo-ts' => 'Часова мітка',
	'accountinfo-ip' => 'IP-адреса',
	'accountinfo-ua' => 'Клієнтська програма',
	'accountinfo-xff' => 'XFF заголовок',
	'accountinfo-now' => 'Зараз',
);
