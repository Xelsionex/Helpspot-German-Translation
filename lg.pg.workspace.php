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

define('lg_workspace_title', 'Arbeitsbereich');

define('lg_workspace_options', 'Optionen');
define('lg_workspace_stream', 'Stream');

define('lg_workspace_filterop', 'Filter Optionen');
define('lg_workspace_mkdefault', 'Standardarbeitsbereich herstellen');
define('lg_workspace_edit', 'Bearbeiten');
define('lg_workspace_delete', 'Filter löschen');
define('lg_workspace_filter_options', 'Optionen');
define('lg_workspace_report', 'Bericht ansehen');
define('lg_workspace_triage', 'Triage anfordern');
define('lg_workspace_rss', 'RSS Feed');
define('lg_workspace_export', 'CSV Export');
define('lg_workspace_triageassign', 'Zuweisen');
define('lg_workspace_triagecategory', 'Kategorie');
define('lg_workspace_triageassignto', 'Zugewiesen an');
define('lg_workspace_deleteconf', 'Sind Sie sicher, dass Sie diesen Filter löschen wollen?');
define('lg_workspace_merge', 'Zusammenführen');
define('lg_workspace_movetotrash', 'Müll');
define('lg_workspace_changestatus', 'Status');
define('lg_workspace_markspam', 'SPAM');
define('lg_workspace_marknotspam', 'Als NICHT SPAM markieren');
define('lg_workspace_nottrash', 'Wiederherstellen im Posteingang');
define('lg_workspace_close', 'Schließen');
define('lg_workspace_respond', 'Batch Antworten');
define('lg_workspace_markdelspam', 'SPAM löschen');
define('lg_workspace_moveto', 'Neu zuordnen');
define('lg_workspace_select', 'Auswählen');
define('lg_workspace_selectall', 'Alles auswählen');
define('lg_workspace_selectcat', 'Wähle eine Kategorie');
define('lg_workspace_assignto', 'Zuordnen zu');
define('lg_workspace_selstatus', 'Einen Status wählen');
define('lg_workspace_closestatus', 'Wählen Sie einen Abschlussstatus');
define('lg_workspace_selmerge', 'Alle markierten Anfragen zusammenführen in:');
define('lg_workspace_customize', 'Spalten anpassen');
define('lg_workspace_notemail', 'Einige Anfragen wurden nicht als SPAM markiert, weil sie nicht per E-Mail oder über das Webformular erfolgten');
define('lg_workspace_notemailqm', 'Die Anfrage wurde nicht als SPAM markiert, da sie nicht aus einer E-Mail oder dem Webformular stammt');
define('lg_workspace_spammessage', 'Hinweis: Spam muss gelöscht werden, um den Spamfilter zu trainieren');
define('lg_workspace_spammessageoff', 'Hinweis: Der Spam-Filter ist in Admin->Einstellungen->E-Mail-Integration auf "Aus" gesetzt. In dieser Konfiguration werden beim Löschen von Spam die Anfragen gelöscht, aber der Spam-Filter nicht trainiert.');
define('lg_workspace_trashmessage', 'Der Papierkorb wird %s gelöscht, nachdem er als Papierkorb markiert wurde. Einmal gelöscht, sind sie nicht wiederherstellbar.');
define('lg_workspace_trashmessagenever', 'Anfragen im Papierkorb werden nicht gelöscht.');
define('lg_workspace_stuckmsg', 'HelpSpot ist nicht in der Lage, eine oder mehrere E-Mails aus einer Mailbox zu ziehen.');
define('lg_workspace_stuckmsg3', 'Um diese Meldung zu entfernen, löschen Sie die E-Mail(s) so schnell wie möglich manuell über Webmail oder Desktop-Client.');
define('lg_workspace_stuckmsg2', 'Ein Grund dafür kann sein, dass nicht genügend PHP-Speicher zum Importieren der E-Mail vorhanden ist. <a href="https://support.helpspot.com/index.php?pg=kb.page&id=34" target="_blank">Klicken Sie hier</a> für Details, wie Sie die Speichereinstellungen anpassen können. Ein weiterer Grund ist, wenn die E-Mail nicht korrekt formatiert ist und nicht geparst/importiert werden kann.');
define('lg_workspace_stucklist', 'Stuck E-Mail-Liste');
define('lg_workspace_stuckbox', 'Mailbox');
define('lg_workspace_stuckfrom', 'E-Mail von');
define('lg_workspace_stuckdate', 'Datum');
define('lg_workspace_stuckviewdetails', 'Details anzeigen.');
define('lg_workspace_stuckretry', 'Löschen und erneut versuchen');
define('lg_workspace_markunread_msg', 'Als ungelesen markiert');
define('lg_workspace_markread_msg', 'Markiert Lesen');
define('lg_workspace_batchchange', 'Verarbeitung Batch');
define('lg_workspace_viewable', 'Anzeigbar von');
define('lg_workspace_viewable_onlyme', 'Nur ich');
define('lg_workspace_viewable_permstaff', 'Erlaubtes Personal');
define('lg_workspace_viewable_everyone', 'Jeder');
define('lg_workspace_viewable_group', 'Gruppe');
