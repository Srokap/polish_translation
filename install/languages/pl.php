<?php
return array(
	'install:title' => 'Instalacja Elgg',
	'install:welcome' => 'Witaj',
	'install:requirements' => 'Kontrola wymagań',
	'install:database' => 'Instalacja bazy danych',
	'install:settings' => 'Konfiguracja strony',
	'install:admin' => 'Utwórz konto administracyjne',
	'install:complete' => 'Gotowe',

	'install:next' => 'Dalej',
	'install:refresh' => 'Odśwież',

	'install:welcome:instructions' => "",
	'install:requirements:instructions:success' => "Twój serwer przeszedł pomyślnie kontrolę wymagań.",
	'install:requirements:instructions:failure' => "",
	'install:requirements:instructions:warning' => "",

	'install:require:php' => 'PHP',
	'install:require:rewrite' => 'Serwer www',
	'install:require:settings' => 'Plik ustawień',
	'install:require:database' => 'Baza danych',

	'install:check:root' => '',

	'install:check:php:version' => 'Elgg wymaga PHP w wersji %s lub nowszej. Serwer używa wersji %s.',
	'install:check:php:extension' => 'Elgg wymaga następującego rozszerzenia PHP: %s.',
	'install:check:php:extension:recommend' => 'Zalecane jest zainstalowanie następującego rozszerzenia PHP: %s.',
	'install:check:php:open_basedir' => 'Dyrektywa PHP open_basedir może przeszkodzić Elgg w zapisie plików do katalogu danych.',
	'install:check:php:safe_mode' => 'Używanie PHP w trybie safe mode jest niezalecane i może powodować problemy z Elgg.',
	'install:check:php:arg_separator' => 'arg_separator.output musi mieć wartość & aby Elgg działał poprawnie. Wartość dla twojego serwera to %s',
	'install:check:php:register_globals' => 'Register globals musi być wyłączone.',
	'install:check:php:session.auto_start' => "session.auto_start musi być wyłączone aby Elgg poprawnie działał. Zmień konfigurację serwera lub dodaj wpis do pliku .htaccess .",

	'install:check:enginedir' => 'Twój serwer nie ma uprawnień do utworzenia pliku settings.php w katalogu engine. Masz dwie możliwości:

		1. Zmień uprawnienia dostępu do katalogu engine

		2. Skopiuj plik settings.example.php do settings.php i podążaj za instrukcjami zawartymi w pliku w celu ustawienia parametrów bazy danych.',
	'install:check:readsettings' => '',

	'install:check:php:success' => "Twoja instalacja PHP spełnia wszystkie wymagania Elgg.",
	'install:check:rewrite:success' => 'Test reguł przepisywania powiódł się.',
	'install:check:database' => '',

	'install:database:instructions' => "",
	'install:database:error' => '',

	'install:database:label:dbuser' =>  'Nazwa użytkownika bazy danych',
	'install:database:label:dbpassword' => 'Hasło bazy danych',
	'install:database:label:dbname' => 'Nazwa bazy danych',
	'install:database:label:dbhost' => 'Host bazy danych',
	'install:database:label:dbprefix' => 'Prefiks tabeli bazy danych',

	'install:database:help:dbuser' => '',
	'install:database:help:dbpassword' => '',
	'install:database:help:dbname' => 'Nazwa bazy danych Elgg',
	'install:database:help:dbhost' => '',
	'install:database:help:dbprefix' => "",

	'install:settings:instructions' => '',

	'install:settings:label:sitename' => 'Nazwa strony',
	'install:settings:label:siteemail' => 'Adres e-mail strony',
	'install:settings:label:wwwroot' => 'Adres URL strony',
	'install:settings:label:path' => 'Katalog, w którym instalujesz Elgg',
	'install:settings:label:dataroot' => 'Katalog danych',
	'install:settings:label:language' => 'Język strony',
	'install:settings:label:siteaccess' => 'Domyślny poziom dostępu na stronie',
	'install:label:combo:dataroot' => 'Elgg tworzy katalog danych',

	'install:settings:help:sitename' => 'Nazwa Twojej nowej strony opartej na Elgg',
	'install:settings:help:siteemail' => 'Adres e-mail używany przez Elgg do komunikacji z użytkownikami',
	'install:settings:help:wwwroot' => 'Adres strony (Elgg zazwyczaj poprawnie zgaduje)',
	'install:settings:help:path' => '',
	'install:settings:help:dataroot' => '',
	'install:settings:help:dataroot:apache' => '',
	'install:settings:help:language' => 'Domyślny język dla strony',
	'install:settings:help:siteaccess' => '',

	'install:admin:instructions' => "",

	'install:admin:label:displayname' => 'Wyświetlana nazwa',
	'install:admin:label:email' => 'Adres e-mail',
	'install:admin:label:username' => 'Nazwa użytkownika',
	'install:admin:label:password1' => 'Hasło',
	'install:admin:label:password2' => 'Ponownie hasło',

	'install:admin:help:displayname' => '',
	'install:admin:help:email' => '',
	'install:admin:help:username' => '',
	'install:admin:help:password1' => "",
	'install:admin:help:password2' => '',

	'install:admin:password:mismatch' => 'Hasła muszą być jednakowe.',
	'install:admin:password:empty' => 'Hasło nie może być puste.',
	'install:admin:password:tooshort' => 'Twoje hasło jest za krótkie',
	'install:admin:cannot_create' => 'Nie udało się utworzyć konta administratora.',

	'install:complete:instructions' => '',
	'install:complete:gotosite' => 'Przejdź do strony',

	'InstallationException:UnknownStep' => '',
	'InstallationException:MissingLibrary' => 'Nie można załadować %s',
	'InstallationException:CannotLoadSettings' => 'Elgg nie mógł wczytać pliku ustawień. Może on nie istnieć lub plik ma złe ustawienia uprawnienień.',

	'install:success:database' => 'Baza danych została zainstalowana.',
	'install:success:settings' => 'Ustawienia strony zostały zapisane.',
	'install:success:admin' => 'Konto administratora zostało utworzone.',

	'install:error:htaccess' => 'Nie udało się utworzyć pliku .htaccess',
	'install:error:settings' => 'Nie udało się utworzyć pliku ustawień',
	'install:error:databasesettings' => '',
	'install:error:database_prefix' => 'Niepoprawne znaki w prefiksie bazy danych',
	'install:error:oldmysql' => '',
	'install:error:nodatabase' => 'Nie można było użyć bazy danych %s. Możliwe, że nie istnieje.',
	'install:error:cannotloadtables' => 'Nie można wczytać tabeli bazy danych',
	'install:error:tables_exist' => '',
	'install:error:readsettingsphp' => '',
	'install:error:writesettingphp' => '',
	'install:error:requiredfield' => '%s jest wymagany',
	'install:error:relative_path' => '',
	'install:error:datadirectoryexists' => '',
	'install:error:writedatadirectory' => '',
	'install:error:locationdatadirectory' => '',
	'install:error:emailaddress' => '%s nie jest poprawnym adresem e-mail',
	'install:error:createsite' => 'Nie można stworzyć strony.',
	'install:error:savesitesettings' => 'Nie można zapisać ustawień strony.',
	'install:error:loadadmin' => 'Nie można wczytać użytkownika administracyjnego.',
	'install:error:adminaccess' => '',
	'install:error:adminlogin' => '',
	'install:error:rewrite:apache' => '',
	'install:error:rewrite:nginx' => '',
	'install:error:rewrite:lighttpd' => '',
	'install:error:rewrite:iis' => '',
	'install:error:rewrite:allowoverride' => "",
	'install:error:rewrite:htaccess:write_permission' => '',
	'install:error:rewrite:htaccess:read_permission' => '',
	'install:error:rewrite:htaccess:non_elgg_htaccess' => '',
	'install:error:rewrite:htaccess:old_elgg_htaccess' => '',
	'install:error:rewrite:htaccess:cannot_copy' => '',
	'install:error:rewrite:altserver' => '',
	'install:error:rewrite:unknown' => '',
	'install:warning:rewrite:unknown' => '',
    
	// Bring over some error messages you might see in setup
	'exception:contact_admin' => 'Wystąpił nieodwracalny błąd i został zalogowany. Jeśli jesteś administratorem, sprawdź swój plik ustawień, w przeciwnym wypadku skontaktuj się z administratorem, podając następującą informację:',
	'DatabaseException:WrongCredentials' => "Elgg nie mógł się połączyć z bazą danych przy użyciu zadanych ustawień. Sprawdź plik ustawień.",
);
