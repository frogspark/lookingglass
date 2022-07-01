<?php
use Roots\WPConfig\Config;

/**
 * QA environment config
 */
Config::define( 'FORCE_SSL_ADMIN', true );
Config::define( 'SCRIPT_DEBUG', false );

// This disables all file modifications including updates.
Config::define( 'DISALLOW_FILE_MODS', true );
