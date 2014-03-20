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

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'accountinfo-ip' => 'IP ünvanı',
	'accountinfo-ua' => 'İstifadəçi agent',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 */
$messages['bn'] = array(
	'accountinfo-ts' => 'সময়বার্তা',
	'accountinfo-ip' => 'আইপি ঠিকানা',
	'accountinfo-ua' => 'ব্যবহারকারী এজেন্ট',
	'accountinfo-now' => 'এখন',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'accountinfo' => 'Декъашхочун дӀаяздарех лаьцна хаамаш',
	'accountinfo-ts' => 'Терахь/хан',
	'accountinfo-ip' => 'IP-адрес',
	'accountinfo-ua' => 'Браузер',
	'accountinfo-xff' => 'XFF-корта',
	'accountinfo-recentchanges' => 'Керла нисдарех лаьцна хаамаш',
	'accountinfo-length-rc' => 'Хаамаш латта бо $1.',
	'accountinfo-checkuser' => 'CheckUser чохь хаам',
	'accountinfo-length-cu' => 'Хаамаш латта бо $1.',
	'accountinfo-user-agent' => '$1 $2 $3 чу',
	'accountinfo-now' => 'ХӀинца',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'accountinfo' => 'Benutzerkonteninformation',
	'accountinfo-desc' => 'Ermöglicht Benutzern die Ansicht der zu ihnen gespeicherten privaten Informationen',
	'accountinfo-ts' => 'Zeitstempel',
	'accountinfo-ip' => 'IP-Adresse',
	'accountinfo-ua' => 'Browser',
	'accountinfo-xff' => 'XFF-Header',
	'accountinfo-recentchanges' => 'Informationen über „Letzte Änderungen“',
	'accountinfo-length-rc' => 'Die Informationen werden bereitgestellt für $1.',
	'accountinfo-checkuser' => 'Informationen über „CheckUser“',
	'accountinfo-length-cu' => 'Die Informationen werden bereitgestellt für $1.',
	'accountinfo-user-agent' => '$1 $2 auf $3',
	'accountinfo-now' => 'Jetzt',
);

/** Zazaki (Zazaki)
 * @author Michawiki
 * @author Mirzali
 */
$messages['diq'] = array(
	'accountinfo' => 'Melumatê hesabi',
	'accountinfo-ip' => 'Adresa IPy',
	'accountinfo-ua' => 'Temsilkarê karberi',
	'accountinfo-now' => 'Nıka',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'accountinfo' => 'Kontowe informacije',
	'accountinfo-desc' => 'Dowólujo wužywarjeju, składowane priwatne informacije wó njom wiźeś',
	'accountinfo-ts' => 'Casowy kołk',
	'accountinfo-ip' => 'IP-adresa',
	'accountinfo-ua' => 'Identifikator wobglědowaka',
	'accountinfo-xff' => 'XFF-głowa',
	'accountinfo-recentchanges' => 'Informacije wó "Aktualnych změnach"',
	'accountinfo-length-rc' => 'Informacije maju se za $1 pśigótowane.',
	'accountinfo-checkuser' => 'Informacije wó "CheckUser"',
	'accountinfo-length-cu' => 'Informacije maju se za $1 pśigótowane.',
	'accountinfo-user-agent' => '$1 $2 na $3',
	'accountinfo-now' => 'Něnto',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Sporeunai
 */
$messages['es'] = array(
	'accountinfo' => 'Información de cuenta',
	'accountinfo-desc' => 'Permite que el usuario consulte información personal almacenada',
	'accountinfo-ts' => 'Fecha y hora',
	'accountinfo-ip' => 'Dirección IP',
	'accountinfo-ua' => 'Agente de usuario',
	'accountinfo-xff' => 'Cabecera XFF',
	'accountinfo-recentchanges' => 'Información en Cambios recientes',
	'accountinfo-length-rc' => 'La información se conserva para $1.',
	'accountinfo-checkuser' => 'Información en CheckUser',
	'accountinfo-length-cu' => 'La información se conserva para $1.',
	'accountinfo-user-agent' => '$1 $2 en $3',
	'accountinfo-now' => 'Ahora',
);

/** Persian (فارسی)
 * @author Armin1392
 */
$messages['fa'] = array(
	'accountinfo' => 'اطلاعات حساب',
	'accountinfo-desc' => 'اجازه به کاربر برای مشاهده اطلاعات خصوصی ذخیره شده درباره آن‌ها',
	'accountinfo-ts' => 'برچسب زمان',
	'accountinfo-ip' => 'آدرس آی‌پی',
	'accountinfo-ua' => 'عامل کاربر',
	'accountinfo-xff' => 'سرفصل ایکس‌اف‌اف',
	'accountinfo-recentchanges' => 'اطلاعات در تغییرات اخیر',
	'accountinfo-length-rc' => 'اطلاعات برای $1 حفظ شده‌‌است.',
	'accountinfo-checkuser' => 'اطلاعات در بررسی کاربر',
	'accountinfo-length-cu' => 'اطلاعات برای $1 حفظ شده‌‌است.',
	'accountinfo-user-agent' => '$1 $2 در $3',
	'accountinfo-now' => 'اکنون',
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

/** Galician (galego)
 * @author Elisardojm
 */
$messages['gl'] = array(
	'accountinfo' => 'Información sobre a conta',
);

/** Gujarati (ગુજરાતી)
 * @author KartikMistry
 */
$messages['gu'] = array(
	'accountinfo' => 'ખાતા માહિતી',
	'accountinfo-ts' => 'સમયછાપ',
	'accountinfo-now' => 'હવે',
);

/** Hawaiian (Hawai`i)
 * @author Kolonahe
 */
$messages['haw'] = array(
	'accountinfo' => 'ʻIke moʻokāki',
	'accountinfo-desc' => 'Hoʻokuʻu i ka mea hoʻohana e ʻike i nā ʻike pilikino i waiho ʻia e pili ana iā ia iho',
	'accountinfo-ts' => 'Poʻohola',
	'accountinfo-ip' => 'Wahinoho IP',
	'accountinfo-ua' => 'ʻĀkena mea hoʻohana',
	'accountinfo-xff' => 'Poʻo XFF',
	'accountinfo-recentchanges' => 'Nā ʻike ma LoliHou',
	'accountinfo-length-rc' => 'Nā ʻike i mālama ʻia no $1.',
	'accountinfo-checkuser' => 'Nā ʻike i MeahoʻohanaHōʻoiaʻiʻo',
	'accountinfo-length-cu' => 'Mālama ʻia i nā ʻike no $1.',
	'accountinfo-user-agent' => '$1 $2 ma ka $3',
	'accountinfo-now' => 'I kēia manawa',
);

/** Hebrew (עברית)
 * @author Inkbug
 */
$messages['he'] = array(
	'accountinfo' => 'פרטי חשבון',
	'accountinfo-desc' => 'מאפשר למשתמשים לראות מידע פרטי שמור על עצמם',
	'accountinfo-ts' => 'חותם זמן',
	'accountinfo-ip' => 'כתובת IP',
	'accountinfo-ua' => 'זיהוי דפדפן',
	'accountinfo-recentchanges' => 'מידע בשינויים האחרונים',
	'accountinfo-length-rc' => 'המידע נשמר ל־$1.',
	'accountinfo-length-cu' => 'המידע נשמר ל־$1.',
	'accountinfo-user-agent' => '$1 $2 ב$3',
	'accountinfo-now' => 'עכשיו',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'accountinfo' => 'Kontowe informacije',
	'accountinfo-desc' => 'Dowola wužiwarjej, składowane priwatne informacije wo nim widźeć',
	'accountinfo-ts' => 'Časowy kołk',
	'accountinfo-ip' => 'IP-adresa',
	'accountinfo-ua' => 'Identifikator wobhladowaka',
	'accountinfo-xff' => 'XFF-hłowa',
	'accountinfo-recentchanges' => 'Informacije wo "Aktualnych změnach"',
	'accountinfo-length-rc' => 'Informacije so za $1 přihotowane dźěrža.',
	'accountinfo-checkuser' => 'Informacije wo "CheckUser"',
	'accountinfo-length-cu' => 'Informacije so za $1 přihotowane dźěrža.',
	'accountinfo-user-agent' => '$1 $2 na $3',
	'accountinfo-now' => 'Nětko',
);

/** Italian (italiano)
 * @author Beta16
 * @author FrancescaGermani
 */
$messages['it'] = array(
	'accountinfo-desc' => "Consente all'utente di vedere informazioni private memorizzate su di loro",
	'accountinfo-ts' => 'Data e ora',
	'accountinfo-ip' => 'Indirizzo IP',
	'accountinfo-xff' => 'Intestazione XFF',
	'accountinfo-user-agent' => '$1 $2 su $3',
	'accountinfo-now' => 'Ora',
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

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'accountinfo' => 'Prevaate Dahte',
	'accountinfo-desc' => 'Löht ene Metmaacher de faßjehallde prevaate Dahte ovver en belooere.',
	'accountinfo-ts' => 'Dattum un Zigg',
	'accountinfo-ip' => 'De <i lang="en">IP</i>-Adräß',
	'accountinfo-ua' => 'Däm Metmaacher singe Brauser',
	'accountinfo-xff' => '<i lang="en" xml:lang="en">XFF</i>-Kopp',
	'accountinfo-recentchanges' => 'Aanjaabe en de neuste Änderonge',
	'accountinfo-length-rc' => 'Daate wääde faßjahallde för $1.',
	'accountinfo-checkuser' => 'Aanjahbe beim Metmaacher Prööve',
	'accountinfo-length-cu' => 'Daate wääde faßjahallde för $1.',
	'accountinfo-user-agent' => 'Dä $1 Väsjohn $2 op $3',
	'accountinfo-now' => 'Jäz',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'accountinfo-ts' => 'Zäitstempel',
	'accountinfo-ip' => 'IP-Adress',
	'accountinfo-recentchanges' => 'Informatiounen an de "Rezenten Ännerungen"',
	'accountinfo-length-rc' => "D'Informatioune gi während $1 versuergt.",
	'accountinfo-checkuser' => 'Informatiounen am CheckUser',
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

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'accountinfo' => 'खात्याची माहिती',
	'accountinfo-desc' => 'सदस्यास त्याच्याबद्दलची माहिती बघण्यास परवानगी देते',
	'accountinfo-ts' => 'वेळशिक्का',
	'accountinfo-ip' => 'अंकपत्ता',
	'accountinfo-ua' => 'सदस्य प्रतिनीधी',
	'accountinfo-xff' => 'XFF हेडर',
	'accountinfo-recentchanges' => 'अलीकडील बदलातली माहिती',
	'accountinfo-length-rc' => '$1 साठी माहिती राखून ठेवली आहे.',
	'accountinfo-checkuser' => 'चेकयूजर मधील माहिती',
	'accountinfo-length-cu' => '$1 साठी माहिती राखून ठेवली आहे.',
	'accountinfo-user-agent' => '$3 वर $1 $2',
	'accountinfo-now' => 'आत्ता',
);

/** Dutch (Nederlands)
 * @author Arent
 * @author JurgenNL
 * @author Niknetniko
 * @author Siebrand
 * @author Sjoerddebruin
 */
$messages['nl'] = array(
	'accountinfo' => 'Gebruikersgegevens',
	'accountinfo-desc' => 'Hiermee kan een gebruiker zijn opgeslagen privé-informatie bekijken',
	'accountinfo-ts' => 'Tijdstip',
	'accountinfo-ip' => 'IP-adres',
	'accountinfo-ua' => 'Useragent',
	'accountinfo-xff' => 'XFF-header',
	'accountinfo-length-rc' => 'Informatie wordt bewaard voor  $1.',
	'accountinfo-checkuser' => 'Informatie in CheckUser',
	'accountinfo-length-cu' => 'Informatie wordt bewaard voor $1.',
	'accountinfo-user-agent' => '$1 $2 op $3',
	'accountinfo-now' => 'Nu',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'accountinfo' => 'Informacions del compte',
	'accountinfo-desc' => "Permet a un utilizaire de veire d'informacions privadas emmaazinadas sus el",
	'accountinfo-ts' => 'Orodatatge',
	'accountinfo-ip' => 'Adreça IP',
	'accountinfo-ua' => 'Agent utilizaire',
	'accountinfo-xff' => 'Entèsta XFF',
	'accountinfo-recentchanges' => 'Informacion dins los darrièrs cambiaments',
	'accountinfo-length-rc' => 'L’informacion es conservada per $1.',
	'accountinfo-checkuser' => 'Informacion dins CheckUser',
	'accountinfo-length-cu' => 'L’informacion es conservada per $1.',
	'accountinfo-user-agent' => '$1 $2 sus $3',
	'accountinfo-now' => 'Ara',
);

/** Polish (polski)
 * @author Chrumps
 */
$messages['pl'] = array(
	'accountinfo' => 'Informacje o koncie',
	'accountinfo-ts' => 'Sygnatura czasowa',
	'accountinfo-ip' => 'Adres IP',
	'accountinfo-xff' => 'Nagłówek XFF',
	'accountinfo-recentchanges' => 'Informacje w „Ostatnich zmianach”',
	'accountinfo-now' => 'Teraz',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'accountinfo-now' => 'اوس',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'accountinfo' => 'Informação da conta',
	'accountinfo-desc' => 'Permite que um utilizador veja as informações privadas armazenadas sobre si',
	'accountinfo-ts' => 'Data e hora',
	'accountinfo-ip' => 'Endereço IP',
	'accountinfo-ua' => 'User-Agent',
	'accountinfo-xff' => 'XFF header',
	'accountinfo-recentchanges' => 'Informação nas Mudanças Recentes',
	'accountinfo-length-rc' => 'A informação é armazenada durante $1.',
	'accountinfo-checkuser' => 'Informação na Verificação de Utilizadores (CheckUser)',
	'accountinfo-length-cu' => 'A informação é armazenada durante $1.',
	'accountinfo-user-agent' => '$1 $2 na plataforma $3',
	'accountinfo-now' => 'Agora',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Anaclaudiaml
 */
$messages['pt-br'] = array(
	'accountinfo' => 'Informações da Conta',
	'accountinfo-desc' => 'Permite ao usuário ver informações privadas armazenadas sobre eles',
	'accountinfo-ts' => 'Data e hora',
	'accountinfo-ip' => 'Endereço de IP',
	'accountinfo-ua' => 'Agente usuário',
	'accountinfo-xff' => 'Cabeçalho XFF',
	'accountinfo-recentchanges' => 'Informações em Modificações Recentes',
	'accountinfo-user-agent' => '$1 $2 em $3',
	'accountinfo-now' => 'Agora',
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

/** Swedish (svenska)
 * @author Jopparn
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'accountinfo' => 'Kontoinformation',
	'accountinfo-desc' => 'Tillåter en användare att se lagrad privat information om dem',
	'accountinfo-ts' => 'Tidsstämpel',
	'accountinfo-ip' => 'IP-adress',
	'accountinfo-ua' => 'Användaragent',
	'accountinfo-xff' => 'XFF-huvud',
	'accountinfo-recentchanges' => 'Information i "Senaste Ändringar"',
	'accountinfo-length-rc' => 'Informationen lagras i $1.',
	'accountinfo-checkuser' => 'Information i CheckUser',
	'accountinfo-length-cu' => 'Informationen lagras i $1.',
	'accountinfo-user-agent' => '$1 $2 på $3',
	'accountinfo-now' => 'Nu',
);

/** Tamil (தமிழ்)
 * @author Jayarathina
 */
$messages['ta'] = array(
	'accountinfo-ts' => 'நேரமுத்திரை',
);

/** Telugu (తెలుగు)
 * @author Ravichandra
 * @author Veeven
 */
$messages['te'] = array(
	'accountinfo' => 'ఖాతా సమాచారం',
	'accountinfo-ts' => 'కాలముద్ర',
	'accountinfo-ip' => 'ఐపీ చిరునామా',
	'accountinfo-ua' => 'వాడుకరి ఏజెంటు',
	'accountinfo-xff' => 'XFF శీర్షిక',
	'accountinfo-recentchanges' => 'ఇటీవలి మార్పుల సమాచారం',
	'accountinfo-length-rc' => '$1 సమాచారం అట్టే ఉంచబడినది.',
	'accountinfo-length-cu' => '$1 సమాచారం అట్టే ఉంచబడినది.',
	'accountinfo-user-agent' => '$3 మీద $1 $2',
	'accountinfo-now' => 'ఇప్పుడే',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 */
$messages['uk'] = array(
	'accountinfo' => 'Відомості облікового запису',
	'accountinfo-desc' => 'Дозволяє користувачу переглянути збережені особисті дані про нього',
	'accountinfo-ts' => 'Часова мітка',
	'accountinfo-ip' => 'IP-адреса',
	'accountinfo-ua' => 'Клієнтська програма',
	'accountinfo-xff' => 'XFF заголовок',
	'accountinfo-recentchanges' => 'Інформація у свіжих змінах',
	'accountinfo-length-rc' => 'Інформація зберігається на $1.',
	'accountinfo-checkuser' => 'Інформація в CheckUser',
	'accountinfo-length-cu' => 'Інформація зберігається на $1.',
	'accountinfo-user-agent' => '$1 $2 на $3',
	'accountinfo-now' => 'Зараз',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Liuxinyu970226
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'accountinfo' => '账户信息',
	'accountinfo-desc' => '允许用户查看已存储的关于他们的私人信息',
	'accountinfo-ts' => '时间戳',
	'accountinfo-ip' => 'IP地址',
	'accountinfo-ua' => '用户代理',
	'accountinfo-xff' => 'XFF标头',
	'accountinfo-recentchanges' => '最近更改中的信息',
	'accountinfo-length-rc' => '信息已为$1保存。',
	'accountinfo-checkuser' => '用户查核中的信息',
	'accountinfo-length-cu' => '信息已为$1保存。',
	'accountinfo-user-agent' => '$1 $2在$3',
	'accountinfo-now' => '现在',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hant'] = array(
	'accountinfo' => '帳戶資訊',
	'accountinfo-desc' => '允許用戶查閱關於他們的已存儲私人資訊',
	'accountinfo-ts' => '時間戳',
	'accountinfo-ip' => 'IP位址',
	'accountinfo-ua' => '用戶代理',
	'accountinfo-xff' => 'XFF標頭',
	'accountinfo-recentchanges' => '於最近更改之資訊',
	'accountinfo-length-rc' => '資訊已保留為$1。',
	'accountinfo-checkuser' => '於用戶查核之資訊',
	'accountinfo-length-cu' => '資訊已保留為$1。',
	'accountinfo-user-agent' => '$1 $2於$3',
	'accountinfo-now' => '現在',
);
