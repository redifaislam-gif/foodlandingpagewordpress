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
define( 'DB_NAME', 'foodlandingpagewordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&$jS^V*C;T}!j(wz8eC1DUd%Y }z{{=xen$A[iWUi%{uA{eeP[gd%7??Ol^)IEf|' );
define( 'SECURE_AUTH_KEY',  'D<[-&U|[(yc;8[i$xdzf;!v:L<x$UHq,eun?,yW^m{dRf A2E;4Xl9$lp[q2NuJE' );
define( 'LOGGED_IN_KEY',    'u}TBo)9`|(,afY_V9!#YBbN0u70i[#eL&@U&1>T&1FA$JI_9kVyax>YwEd:jPZ-p' );
define( 'NONCE_KEY',        '!OdG0=>esTf$i.AmZ7xcL gdHU*)+!R_!XpuWO9O}XL^Q8l5J}r`tAs6_D88W|VZ' );
define( 'AUTH_SALT',        'NFHpB+D/bv{WX_y$Y=El5`0@1]N;P0k)5Z6/Sw?W#dw&/]kMAfk?:_,y=l9j)(E)' );
define( 'SECURE_AUTH_SALT', 'NTw?yK[UWQo LSOw9fQt<x=g W|/mU@J3O$=ZfUqaFct`tp?[8nP}|S8}2KJ+|!;' );
define( 'LOGGED_IN_SALT',   'sE4]te?poEDbmmMFRIk@M~d3Bqt+:l{eZKet!Xm ImjgNhJQSu$n^YyJ[2e-T!!1' );
define( 'NONCE_SALT',       '.C{/8fj`8lHqWhFb4OCES6-VA0Lh5eID&SiHa;$IWIVDh:/?5ONE/Hv]yk Y;AFY' );

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
