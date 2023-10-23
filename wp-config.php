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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_belajarwoo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'l^V|2PW<.n!YeS<JY<+jZ9[W4eTs{@niXE(_t`y2,v&k$MY&0@RhQ{B;_5;Aq)Y}' );
define( 'SECURE_AUTH_KEY',  '%:~!(QV[]RgPSh.):f3R`O&>^ZBDCl;8U9QzvUBi{s0nL-+X; 37T#/s-_1Z6t&S' );
define( 'LOGGED_IN_KEY',    'HwoIa67;F`e,s<E8[?mfKB)a%lN2#8*C#:W`G~fxLR,f): 7m0kTX53<;d^cKgN6' );
define( 'NONCE_KEY',        'X#2.q}p^w7,[G24kJYS1$}4Iz):Ml@5RK`sZ*U<OI7 ld4:*8p1V}-|tnO`B867F' );
define( 'AUTH_SALT',        'T[;zb6j@^aPu3}zhtOEM8oFo$ut1_AJlL8>9l3 DSJcQa-[$f<u9`=%V&1r=N,^W' );
define( 'SECURE_AUTH_SALT', 'ZF|dc[DO$fES-$~*Dyjg[tk2EiklB{A{22)JN:(he-;~_=5&)q{}*+[(v&fsf?tv' );
define( 'LOGGED_IN_SALT',   '0FbMh,Q<W nY4eeca[~[pu+0q#MO,QKa= 5OV,-6KSPCn* ?:@*X>>JNEo>#!bZz' );
define( 'NONCE_SALT',       'O7yI4M(?|z0u%,tQW7N,DHy|z#u$v$ig1.tLW2#0J:1lS$lwb6&n|5MR>?{VGUq[' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
