<?php
return array(
	'admin:users:unvalidated' => 'Niezatwierdzony',
	
	'email:validate:subject' => "%s proszę potwierdź swój adres e-mail!",
	'email:validate:body' => "Witaj %s,

Proszę potwierdź swój adres e-mail poprzez klikniecie poniższego linku :

%s
",
	'email:confirm:success' => "You have confirmed your email address!",
	'email:confirm:fail' => "Your email address could not be verified...",

	'uservalidationbyemail:emailsent' => "Wysłano e-mail do <em>%s</em>",
	'uservalidationbyemail:registerok' => "Aby aktywować swoje konto proszę potwierdź swój adres e-mail poprzez kliknięcie w link który do Ciebie wysłaliśmy.",
	'uservalidationbyemail:login:fail' => "Your account is not validated so the log in attempt failed. Another validation email has been sent.",

	'uservalidationbyemail:admin:no_unvalidated_users' => 'Brak niezatwierdzonych użytkowników.',

	'uservalidationbyemail:admin:unvalidated' => 'Niezatwierdzony',
	'uservalidationbyemail:admin:user_created' => 'Registered %s',
	'uservalidationbyemail:admin:resend_validation' => 'Resend validation',
	'uservalidationbyemail:admin:validate' => 'Zatwierdź',
	'uservalidationbyemail:confirm_validate_user' => 'Zatwierdzić %s?',
	'uservalidationbyemail:confirm_resend_validation' => 'Resend validation email to %s?',
	'uservalidationbyemail:confirm_delete' => 'Usunąć %s?',
	'uservalidationbyemail:confirm_validate_checked' => 'Zatwierdzić zaznaczonych użytkowników?',
	'uservalidationbyemail:confirm_resend_validation_checked' => 'Resend validation to checked users?',
	'uservalidationbyemail:confirm_delete_checked' => 'Usunąć zaznaczonych użytkowników?',
	
	'uservalidationbyemail:errors:unknown_users' => 'Nieznani użytkownicy',
	'uservalidationbyemail:errors:could_not_validate_user' => 'Nie można zatwierdzić użytkownika.',
	'uservalidationbyemail:errors:could_not_validate_users' => 'Nie można zatwierdzić wszystkich zaznaczonych użytkowników.',
	'uservalidationbyemail:errors:could_not_delete_user' => 'Could not delete user.',
	'uservalidationbyemail:errors:could_not_delete_users' => 'Could not delete all checked users.',
	'uservalidationbyemail:errors:could_not_resend_validation' => 'Could not resend validation request.',
	'uservalidationbyemail:errors:could_not_resend_validations' => 'Could not resend all validation requests to checked users.',

	'uservalidationbyemail:messages:validated_user' => 'Użytkownik zatwierdzony.',
	'uservalidationbyemail:messages:validated_users' => 'Wszyscy zaznaczeni użytkownicy zostali zatwierdzeni.',
	'uservalidationbyemail:messages:deleted_user' => 'Użytkownik usunięty.',
	'uservalidationbyemail:messages:deleted_users' => 'All checked users deleted.',
	'uservalidationbyemail:messages:resent_validation' => 'Validation request resent.',
	'uservalidationbyemail:messages:resent_validations' => 'Validation requests resent to all checked users.'

);
