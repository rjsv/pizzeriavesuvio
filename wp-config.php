<?php
/**
 * The base configuration for WordPress
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i6693733_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i6693733_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'D.MTqvam6rGuAy8ymBd81' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uBflepmsd9s905bIwAinW6EXoyEmOc7dduYDjJxiSQ3JtViORyA1evLXdcpauHKL');
define('SECURE_AUTH_KEY',  'PMma0RxmD2ZLXD2Tb7iEQLhUBufvpqTjIMeXpJVEvinzKK6H6q1BIOIRFTdF20DW');
define('LOGGED_IN_KEY',    'pKsDPy0pUUDFM7tUHn7xehXx9gGrpFnnFSd3tUWnvEUItGlmc2MIhxUghkm8r0TO');
define('NONCE_KEY',        'qgKda6sRptxXHuyBunSSs9UnMsbtarv5RWIS2Dx0EPlbESzWg4fKXL2H1zmLNcx2');
define('AUTH_SALT',        'zGAtGk98pAwSITFVe2qir1PiNULEWFQ1p68LabAb2EmWIblXtdeNHHBYYbrn1kcW');
define('SECURE_AUTH_SALT', 'aMYwuSezq45j4VNoc699MdzbqCC4DjZM45RiECEn91lD6WbX6VogGgfUqCE5UnmW');
define('LOGGED_IN_SALT',   'ed8NUJQwqlOqhGmmkpql0h5P7n1JUcvuLBZIhe7YTkVIIb2GnpbXlBpqrFZYbITl');
define('NONCE_SALT',       'pNGkxAUDXHwSjLHA4DHzV6Rq9M4r9joAh3ZtFh6Vo3NMbbu5O45ZkK0vKnM9L594');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
