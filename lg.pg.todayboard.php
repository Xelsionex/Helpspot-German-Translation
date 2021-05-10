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

define('lg_todayboard_title', 'Todayboard');
define('lg_todayboard_speed', 'Erste Reaktionsgeschwindigkeit (Biz hours)');
define('lg_todayboard_category', 'Top-Kategorien');
define('lg_todayboard_closedafterx', 'Anzahl der Antworten bis zum Schließen');
define('lg_todayboard_staffassignment', 'Derzeitige Top-Workloads');
define('lg_todayboard_median', 'Median (hours)');
define('lg_todayboard_average', 'Durchschnitt (hours)');
define('lg_todayboard_interactions', 'Interaktionen');
