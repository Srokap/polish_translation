<?php
return array(
	'admin:users:unvalidated' => 'Niezatwierdzony',
	
	'email:validate:subject' => "%s proszę potwierdź swój adres e-mail!",
	'email:validate:body' => "Witaj %s,

Proszę potwierdź swój adres e-mail poprzez klikniecie poniższego linku :

%s
",
	'email:confirm:success' => "",
	'email:confirm:fail' => "",

	'uservalidationbyemail:emailsent' => "Wysłano e-mail do <em>%s</em>",
	'uservalidationbyemail:registerok' => "Aby aktywować swoje konto proszę potwierdź swój adres e-mail poprzez kliknięcie w link który do Ciebie wysłaliśmy.",
	'uservalidationbyemail:login:fail' => "",

	'uservalidationbyemail:admin:no_unvalidated_users' => 'Brak niezatwierdzonych użytkowników.',

	'uservalidationbyemail:admin:unvalidated' => 'Niezatwierdzony',
	'uservalidationbyemail:admin:user_created' => '',
	'uservalidationbyemail:admin:resend_validation' => '',
	'uservalidationbyemail:admin:validate' => 'Zatwierdź',
	'uservalidationbyemail:confirm_validate_user' => 'Zatwierdzić %s?',
	'uservalidationbyemail:confirm_resend_validation' => '',
	'uservalidationbyemail:confirm_delete' => 'Usunąć %s?',
	'uservalidationbyemail:confirm_validate_checked' => 'Zatwierdzić zaznaczonych użytkowników?',
	'uservalidationbyemail:confirm_resend_validation_checked' => '',
	'uservalidationbyemail:confirm_delete_checked' => 'Usunąć zaznaczonych użytkowników?',
	
	'uservalidationbyemail:errors:unknown_users' => 'Nieznani użytkownicy',
	'uservalidationbyemail:errors:could_not_validate_user' => 'Nie można zatwierdzić użytkownika.',
	'uservalidationbyemail:errors:could_not_validate_users' => 'Nie można zatwierdzić wszystkich zaznaczonych użytkowników.',
	'uservalidationbyemail:errors:could_not_delete_user' => '',
	'uservalidationbyemail:errors:could_not_delete_users' => '',
	'uservalidationbyemail:errors:could_not_resend_validation' => '',
	'uservalidationbyemail:errors:could_not_resend_validations' => '',

	'uservalidationbyemail:messages:validated_user' => 'Użytkownik zatwierdzony.',
	'uservalidationbyemail:messages:validated_users' => 'Wszyscy zaznaczeni użytkownicy zostali zatwierdzeni.',
	'uservalidationbyemail:messages:deleted_user' => 'Użytkownik usunięty.',
	'uservalidationbyemail:messages:deleted_users' => '',
	'uservalidationbyemail:messages:resent_validation' => '',
	'uservalidationbyemail:messages:resent_validations' => ''

);
