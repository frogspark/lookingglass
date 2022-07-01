<?php
use Roots\WPConfig\Config;

/**
 * Development environment config
 */
Config::define('FORCE_SSL_ADMIN', true);
Config::define('SAVEQUERIES', true);
Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_DISPLAY', false);
Config::define('SCRIPT_DEBUG', true);

// This disables all file modifications including updates.
Config::define('DISALLOW_FILE_MODS', false);
