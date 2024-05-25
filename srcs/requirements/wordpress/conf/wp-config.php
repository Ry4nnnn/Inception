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
define( 'DB_NAME', 'MYSQL_DATABASE' );

/** MySQL database username */
define( 'DB_USER', 'MYSQL_USER' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MYSQL_PASSWORD' );

/** MySQL hostname */
define( 'DB_HOST', 'MYSQL_HOSTNAME' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':fAE>vUhqky<cFz~V{Zdi|xW_5Gu(k7}|6^Ykjb[?<%cf19e#;}OS<Q{pmH.5zFW');
define('SECURE_AUTH_KEY',  '+(vC|U)5xPHY^6Ij45V@0&Vz5DnKE+h5SOeLI]x[#)=-MooC@qz8@?}4e:LH]|zd');
define('LOGGED_IN_KEY',    'GjHJMhYL<2~GCRmEr_mdedqne>a~zvTngG+>B9++LrxrQMJ_%g]fxqUmEoz/VQXD');
define('NONCE_KEY',        'JB-j]#qkO+K|lRV=~s[77GNaBavX_Z-0n^z:Z89cK.Po+iVlGc{XST.N`[{-A$`{');
define('AUTH_SALT',        'Y7?M|Xnh}iW.Q[9$>E|>esFZT5t/}kw3+0#|+Ho-#MP]-Mx^g>HR-9u7HBDtyeZo');
define('SECURE_AUTH_SALT', 'xyOQ5{0N+Adz&HX<3FqR v%,J3QA+1^R6Jx|mj?M1n-PYQOC~u8sfFL{k&?!8 !I');
define('LOGGED_IN_SALT',   'xH#%T>!yKs;Teh4&994EK6|WsY9PV|ahDwWz~^J8*%B-3EXqzj*0/E=NX=EDB@pa');
define('NONCE_SALT',       'B/0VQ#iP.KeRkmcO8#B^+;:@l1 C[|yw|_mF05vQ;#`;U#?O^W~+!XW,}IY%[|=w');

// define( 'WP_REDIS_HOST', 'redis' );
// define( 'WP_REDIS_PORT', 6379 );


// define('WP_CACHE', true);

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
?>