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

define('lg_custworkspace_title', 'Arbeitsbereich anpassen');
define('lg_custworkspace_inbox', 'Anpassen der Posteingangsspalten');
define('lg_custworkspace_myq', 'Anpassen der Spalten in der Warteschlange');
define('lg_custworkspace_selectcol', 'Wählen Sie eine Spalte zum Hinzufügen');
define('lg_custworkspace_removecol', 'Sind Sie sicher, dass Sie diese Spalte entfernen möchten?');
define('lg_custworkspace_setcolumnwidthsave', 'Speichern');
define('lg_custworkspace_setcolumnwidthnote', 'Leerzeichen für eine Füllspalte');
define('lg_custworkspace_setcolumnwidthfill', 'Diese Spalte füllt immer');
