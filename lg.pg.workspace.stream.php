<?php

// SECURITY: Don't allow direct calls to this file outside the context of HelpSpot
if (!defined('cBASEPATH')) die();

/* EDITING NOTES
1. Some strings contain %s symbols, these must be maintained
2. Any single quotes must be preceded by a slash like this:  \'  ex: there\'s
3. If you modify this file, be sure to back it up in case you overwrite it during an upgrade by accident
*/

define('lg_workspacestream_title','Arbeitsbereich Stream');
define('lg_workspacestream_streaming','Live Streaming');
define('lg_workspacestream_grid','Raster');
define('lg_workspacestream_stream','Nur Mitarbeiter');
define('lg_workspacestream_streamwpriv','Nur Mitarbeiter w/ Privat');
define('lg_workspacestream_streamcustomers','Nur Kunden');
define('lg_workspacestream_streamcuststaff','Kunden und Mitarbeiter');
?>