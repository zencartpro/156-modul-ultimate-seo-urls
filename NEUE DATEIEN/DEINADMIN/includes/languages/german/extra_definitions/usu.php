<?php
/**
 * Part of Ultimate URLs for Zen Cart.
 *
 * @copyright Copyright 2019        Cindy Merkin (vinosdefrutastropicales.com)
 * @copyright Copyright 2013 - 2015 Andrew Ballanger
 * @license http://www.gnu.org/licenses/gpl.txt GNU GPL V3.0
 */
define('BOX_CONFIGURATION_USU', 'Ultimate SEO URLs');
define('BOX_CONFIGURATION_USU_UNINSTALL', 'Ultimate SEO URLs deinstallieren');
// Messages used on the configuration page
define('USU_PLUGIN_WARNING_GLOBAL_DISABLED', 'The global USU cache has been disabled. This is not recommended and overrides USU\'s caching of <em>all</em> URL types.');

define('USU_PLUGIN_WARNING_SHORT_WORDS', 'The value entered for the <em>Filter short words</em> setting (<b>%s</b>) is not a positive integer; the setting has been defaulted to <b>0</b>.');
define('USU_PLUGIN_WARNING_CATEGORY_DIR', 'The setting for <em>Display categories as directories</em> has been changed to <code>short</code>, since its <code>full</code> setting is incompatible with <em>Format of alternate URLs</em> setting of <code>parent</code>.');
define('USU_PLUGIN_WARNING_FORMAT', 'The setting for <em>Format of alternate URLs</em> has been changed to <code>original</code>, since its <code>parent</code> setting is incompatible with <em>Display categories as directories</em> setting of <code>full</code>.');

define('USU_PLUGIN_CACHE_RESET', 'Der USU Cache (%s) wurde geleert.');

// General warning messages
define('USU_PLUGIN_WARNING_TABLE', 'WARNUNG: Die Datenbanktabelle \'%s\' existiert nicht!<ul><li>Das SQL Caching für \'Ultimate SEO URLs\' wurde deaktiviert um Fehler zu vermeiden.</li><li>Das kann zu Performanceeinbußen beim Laden der Seiten führen.</li><li><b>Empfehlung:</b> Führen Sie den Installer erneut aus, der mit dem \'Ultimate SEO URLs\' Modul mitgeliefert wurde.</li></ul>');
define('USU_INSTALLED_SUCCESS', BOX_CONFIGURATION_USU . ', v%s, wurde erfolgreich installiert.');
define('USU_UPDATED_SUCCESS', BOX_CONFIGURATION_USU . ' wurde erfolgreich aktualisiert von v%1$s auf v%2$s.');