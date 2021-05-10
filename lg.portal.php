<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (! defined('cBASEPATH')) {
    die();
}

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_portal_phonesupport', 'Telefon Support');
define('lg_portal_home', 'Home');
define('lg_portal_submitrequest', 'Anfrage einreichen');
define('lg_portal_checkrequest', 'Prüfen einer Anfrage');
define('lg_portal_create_login', 'Ein Konto erstellen');
define('lg_portal_loginrequired', 'Anmeldung erforderlich');
define('lg_portal_login_forgot', 'Passwort vergessen');
define('lg_portal_requesthistory', 'Verlauf anfordern');
define('lg_portal_accessidheader', 'Ihr Zugangsschlüssel');
define('lg_portal_accessnote', 'Der oben angegebene Zugangsschlüssel kann verwendet werden, um den Status Ihrer Anfrage zu überprüfen. <br> Für einen schnellen Zugriff auf Updates bookmarken Sie diese Seite.');
define('lg_portal_updatebox', 'Haben Sie zusätzliche Informationen? Verwenden Sie das Feld unten, um Ihre Anfrage zu aktualisieren.');
define('lg_portal_kb', 'Wissensbücher');
define('lg_portal_kbprinter', 'Druckerfreundliche Version');
define('lg_portal_downloads', 'Downloads');
define('lg_portal_relatedpages', 'Verwandte Seiten');
define('lg_portal_search', 'Suche');
define('lg_portal_helpfulpages', 'Am hilfreichsten bewertete Wissensbuchseiten');
define('lg_portal_highlightedpages', 'Hervorgehobene Wissensbuchseiten');
define('lg_portal_searchkb', 'Wissensbücher');
define('lg_portal_tags', 'Wissens-Tags');
define('lg_portal_searchtags', 'Verwandte Tags');
define('lg_portal_hf', 'Diese Seite wurde');
define('lg_portal_helpful', 'Hilfreich');
define('lg_portal_nothelpful', 'Nicht Hilfreich');
define('lg_portal_hasvoted', 'Vielen Dank für Ihr Feedback');
define('lg_portal_sticky', 'Klebrig');
define('lg_portal_email', 'E-Mail');
define('lg_portal_postreply', 'Antwort verfassen');
define('lg_portal_reply', 'Antworten');
define('lg_portal_to', 'An');
define('lg_portal_subject', 'Betreff');
define('lg_portal_message', 'Nachricht');
define('lg_portal_yourname', 'Ihr Name');
define('lg_portal_youremail', 'Ihre E-Mail');
define('lg_portal_sendemail', 'E-Mail senden');
define('lg_portal_yourpost', 'Dein Beitrag');
define('lg_portal_postername', 'Name');
define('lg_portal_posteremail', 'E-Mail');
define('lg_portal_posterurl', 'Deine Webseite');
define('lg_portal_er_topic', 'Bitte geben Sie ein Thema an');
define('lg_portal_er_message', 'Bitte geben Sie eine Nachricht ein');
define('lg_portal_er_name', 'Bitte geben Sie einen Namen an');
define('lg_portal_er_unique_email', 'Dieser Benutzername existiert bereits. <a href=index.php?pg=login.forgot>Setzen Sie Ihr Passwort hier zurück.</a>');
define('lg_portal_er_validcaptcha', 'Bitte geben Sie das Sicherheitswort ein');
define('lg_portal_er_validrecaptcha', 'Bitte kreuzen Sie an, dass Sie kein Roboter sind');
define('lg_portal_prev', 'Vorherige Seite');
define('lg_portal_next', 'Nächste Seite');
define('lg_portal_emailupdate', 'Antworten per E-Mail abonnieren');
define('lg_portal_request', 'Anfrage für Unterstützung einreichen');
define('lg_portal_req_account', 'Konto ID');
define('lg_portal_req_name', 'Name');
define('lg_portal_req_file_upload', 'Ein unterstützendes Dokument anhängen (optional)');
define('lg_portal_req_note', 'Bitte füllen Sie das untenstehende Formular mit Ihren Angaben aus. Ein Mitarbeiter unseres Supports wird Ihnen so schnell wie möglich antworten.');
define('lg_portal_req_firstname', 'Vorname');
define('lg_portal_req_lastname', 'Nachname');
define('lg_portal_req_email', 'E-Mail');
define('lg_portal_req_cc_email', 'Auch E-Mail benachrichtigen');
define('lg_portal_req_subject', 'Betreff');
define('lg_portal_req_phone', 'Telefon');
define('lg_portal_req_urgent', 'Ist diese Anfrage dringend?');
define('lg_portal_req_category', 'Wie würden Sie diese Anfrage kategorisieren?');
define('lg_portal_req_yes', 'Ja');
define('lg_portal_req_no', 'Nein');
define('lg_portal_req_submitrequest', 'Anfrage senden');
define('lg_portal_req_update', 'Ein Update bereitstellen');
define('lg_portal_req_updaterequest', 'Anfrage aktualisieren');
define('lg_portal_req_detailsheader', 'Details anfordern');
define('lg_portal_req_generalerror', 'Es ist ein Fehler beim Absenden Ihrer Anfrage aufgetreten. Bitte versuchen Sie es erneut.');
define('lg_portal_req_required', 'Dieses Feld ist erforderlich');
define('lg_portal_req_numberreq', 'Dieses Feld muss eine Zahl sein');
define('lg_portal_req_validemail', 'Bitte geben Sie eine gültige E-Mail an');
define('lg_portal_req_enterkey', 'Geben Sie Ihren Zugangsschlüssel ein, um eine einzelne Anfrage zu prüfen');
define('lg_portal_subjectdefaultnew', 'Informationen zu Ihrer Anfrage');
define('lg_portal_req_login', 'Loggen Sie sich ein, um Ihre komplette Anfragehistorie zu sehen');
define('lg_portal_create_login_ex', 'Erstellen Sie ein Konto, um Ihren Anfrageverlauf anzuzeigen');
define('lg_portal_login_forgot_ex', 'Ihr Passwort zurücksetzen');
define('lg_portal_req_emailpassword', 'Passwort vergessen');
define('lg_portal_req_logincreate', 'Konto erstellen');
define('lg_portal_req_loginemail', 'E-Mail');
define('lg_portal_req_loginusername', 'Benutzername');
define('lg_portal_req_loginpassword', 'Passwort');
define('lg_portal_req_loginpassword_confirm', 'Bestätigen Sie das Passwort');
define('lg_portal_req_loginbutton', 'Anmelden');
define('lg_portal_req_createbutton', 'Konto erstellen');
define('lg_portal_req_pw_reset_link', 'Link zum Zurücksetzen des Passworts senden');
define('lg_portal_req_loginfailed', 'Ihr Login ist fehlgeschlagen. Bitte versuchen Sie es erneut.');
define('lg_portal_req_logout', 'Abmelden');
define('lg_portal_req_changepassword', 'Passwort ändern');
define('lg_portal_req_newpassword', 'Neues Passwort');
define('lg_portal_req_confirm', 'Bestätigen');
define('lg_portal_req_save', 'Speichern');
define('lg_portal_req_sending', 'Senden...');
define('lg_portal_req_passwordsaved', 'Passwort gespeichert');
define('lg_portal_req_passwordposterror', 'Konnte Passwort nicht speichern');
define('lg_portal_req_passworderror', 'Passwörter müssen übereinstimmen. Bitte versuchen Sie es erneut.');
define('lg_portal_req_emailempty', 'Bitte geben Sie Ihre E-Mail ein');
define('lg_portal_req_emailerror', 'Bitte geben Sie eine gültige E-Mail ein');
define('lg_portal_req_passwordsent', 'Reset-E-Mail gesendet. Bitte überprüfen Sie Ihr E-Mail-Konto.');
define('lg_portal_norequesthistory', 'Es liegen keine Anfragen für diese E-Mail vor.');

define('lg_portal_check', 'Check');
define('lg_portal_invalidkey', 'Dieser Zugangsschlüssel ist nicht in der Datei');
define('lg_portal_requestclosed', 'Diese Anfrage wurde geschlossen und steht nicht mehr zur öffentlichen Ansicht zur Verfügung. Wenn Sie eine neue Anfrage erstellen möchten, klicken Sie bitte auf den unten stehenden Link oder melden Sie sich an, um Ihren kompletten Anfrageverlauf zu sehen.');
define('lg_portal_closedsubmitnew', 'Eine neue Anfrage stellen');
define('lg_portal_closedlogin', 'Anmelden');
define('lg_portal_closedor', 'oder');
define('lg_portal_checkboxchecked', 'Geprüft');
define('lg_portal_checkboxempty', 'Nicht geprüft');

define('lg_portal_spamredirect', 'Moderierter Beitrag');
define('lg_portal_spamrenote', 'Dieser Beitrag wurde zur Moderation vorgemerkt. Er wird in Kürze auf der Website erscheinen, nachdem die Administratoren der Website die Möglichkeit hatten, ihn zu überprüfen.');
define('lg_portal_spamreturn', 'Zum Zurückkehren klicken');
define('lg_portal_captcha', 'Bitte geben Sie das Sicherheitswort ein');
define('lg_portal_recaptcha', 'Bitte geben Sie die Sicherheitsworte ein');
define('lg_portal_recaptcha_changewords', 'Wörter ändern');

define('lg_portal_maintenance_title', 'Wartungsmodus');
define('lg_portal_maintenance_note', 'Der Helpdesk ist derzeit wegen Wartungsarbeiten offline. Bitte schauen Sie in ein paar Minuten wieder vorbei.');

define('lg_portal_password_reset', 'Es wurde ein neues Passwort für Ihr Konto erstellt. Bitte prüfen Sie Ihre E-Mail.');

define('lg_portal_tagsearch', 'Tag');
define('lg_portal_tagsearch_books', 'Wissensbuch Treffer');

define('lg_portal_agree_terms_privacy', 'Ich stimme den <a href="%s" target="_blank">Nutzungsbedingungen</a> und <a href="%s" target="_blank">Datenschutzbestimmungen</a> zu');
define('lg_portal_agree_terms', 'Ich stimme den <a href="%s" target="_blank">Nutzungsbedingungen</a> zu');
define('lg_portal_agree_privacy', 'Ich stimme der <a href="%s" target="_blank">Datenschutzrichtlinie</a> zu');
define('lg_portal_req_terms', 'Sie müssen den Bedingungen zustimmen');
