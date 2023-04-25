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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'allisonsDB2jgk');

/** MySQL database username */
define('DB_USER', 'allisonsDB2jgk');

/** MySQL database password */
define('DB_PASSWORD', 'XfuNHYSke');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'COw:|SKd1[G9sl_-OGdV_-1]dWtl91OG-t]_OHeW]_92le+tH9WO80NFzr>!UNkc0');
define('SECURE_AUTH_KEY',  'qALEqj^yMEbT<^6jbyq7MEyr<^UMjb<E7jcyrF7UM^y>bUrjSLia;#D5ph~OK');
define('LOGGED_IN_KEY',    '+]WPme<E6qi*xLDaT<*2;XPmf2;IAym.+PHeXdVsk84RJ@v}!VNkc[!81kd-sG8VN');
define('NONCE_KEY',        'dw5:G-s[_VOld1[G8ld-tG9WSK~w:#ZSpUMjc},73nf$vIBYQ@v},YQng3}JBvn,');
define('AUTH_SALT',        't_HeS#*6;iaxpD5SL+q].WPme2]HAtm.+kdzsG8VN!z0[cVsk1[G8sk!-NGdVR|@4');
define('SECURE_AUTH_SALT', 'w9K~w:|ZOld1[G8ld-tG9WO_-1[dWslUMjc>F7rj^zMFcU^z0>cUrk70NFzr>^NF');
define('LOGGED_IN_SALT',   'jzF7UMzr>!UNkc0>F7rk^ziaxqD6TL*x;<aTqi<E6qi*yLEbT<*6;bTqj6MEyq<');
define('NONCE_SALT',       's_OGdV[!81kd-s51OG-s[_SKlZ:|C5haxpD5WO_-:#ZSph;#D5ph~xLDaS#~5;@v}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
