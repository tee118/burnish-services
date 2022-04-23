<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'burnishs_wp978' );

/** MySQL database username */
define( 'DB_USER', 'burnishs_wp978' );

/** MySQL database password */
define( 'DB_PASSWORD', 'j]7.1W9pW(Sa(R(1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g0ycnmlnpdkq29sklz6uulpevimgjsn8rgbj4durrg4tbn4jscgsjczruc2ffemd' );
define( 'SECURE_AUTH_KEY',  'fgzphb0l0xw19bby4n7uhizrqkckguomqyfvnjpbhizhdrjhwbxpmmojc3pkhl3v' );
define( 'LOGGED_IN_KEY',    'zobvpod6r5rqtkfkqwzx9wgu0lqtob0mcxyyvm480z1qgqmfic18oz2mxvr2nncs' );
define( 'NONCE_KEY',        'vxv5z77h8sfkumy02pycwebwssc8ixan7ssxn5zdxiikx5ibifnuhxniuuzl0zmk' );
define( 'AUTH_SALT',        'tfpx2ejlxvetvoprnxzwzxgp1z9xl5m2esumqlcv2zdvyxe7wyst0oaeozsez1qd' );
define( 'SECURE_AUTH_SALT', 'yx79z7inrginfj17qxg9y4fuuytn3vwwqplvak6thbnwkp8ipqtnfrpcgida3i30' );
define( 'LOGGED_IN_SALT',   'p53fcxdtyujimyoknkmghqnqsfzsmtoxodczjefob1jfptwe2jlqxseabwkhtkdl' );
define( 'NONCE_SALT',       'jtco9btjtwuozffyu6pxmeuvyl88cnw9cxb5szskhlkv0idjz3ydott7ofw1kmem' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyk_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
