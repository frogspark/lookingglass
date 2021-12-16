<?php
/** Production */
use Roots\WPConfig\Config;

ini_set('display_errors', 0);
Config::define('WP_DEBUG_DISPLAY', false);
Config::define('SCRIPT_DEBUG', false);

/** Disable all file modifications including updates and update notifications */
Config::define('DISALLOW_FILE_MODS', true);
