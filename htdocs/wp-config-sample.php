<?php
/**
 * The base configuration for WordPress.
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @package WordPress
 * @see https://codex.wordpress.org/Editing_wp-config.php
 */

// Composer autoloader
require __DIR__ . '/wp-content/vendor/autoload.php';


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

// MySQL database username.
define( 'DB_USER', 'username_here' );

// MySQL database password.
define( 'DB_PASSWORD', 'password_here' );

// MySQL hostname.
define( 'DB_HOST', 'localhost' );

// Database Charset to use in creating database tables.
define( 'DB_CHARSET', 'utf8' );

// The Database Collate type. Don't change this if in doubt.
define( 'DB_COLLATE', '' );

/*
// @+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'put your unique phrase here' );
define( 'SECURE_AUTH_KEY', 'put your unique phrase here' );
define( 'LOGGED_IN_KEY', 'put your unique phrase here' );
define( 'NONCE_KEY', 'put your unique phrase here' );
define( 'AUTH_SALT', 'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT', 'put your unique phrase here' );
define( 'NONCE_SALT', 'put your unique phrase here' );

// #@-

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/*
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SAVEQUERIES', false );

/*
 * Custom WordPress Install Path.
 */
// Sets the site's admin location and the site's location, respectively.
define( 'WP_SITEURL', 'https://yourdomainname.com/wp' );
define( 'WP_HOME', 'https://yourdomainname.com' );
// Sets the content location, related to what's defined on composer.json file.
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
// Sets the plugins location, related to what's defined on composer.json file.
define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );
define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins' );
// Disables the embebeded editor.
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );
define( 'RELOCATE', true );
// Disables automatic update functions.
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );

/*
 * SSL
 * You might want to force SSL on the admin page
 */
define( 'FORCE_SSL_ADMIN', true );

// That's all, stop editing! Happy publishing.

// Absolute path to the WordPress directory.
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
