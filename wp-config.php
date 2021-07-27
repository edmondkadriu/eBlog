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
define( 'DB_NAME', 'eblogwts_projekti' );

/** MySQL database username */
define( 'DB_USER', 'eblogwts_connect' );

/** MySQL database password */
define( 'DB_PASSWORD', 'diarhyseni123.' );

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
define( 'AUTH_KEY',         'ws!lh^H,^O=^3&gzSzBW1Qju,NP(jfZ=cW3$(i]9,vnv,fI^B{~ %7c@gnUyJkS3' );
define( 'SECURE_AUTH_KEY',  '>L$M]o>>]PfiYngG3*UzG5#w~F:8WQ^(6h4UH{x 5UN&hw+[.B(}<]U:&&rT?:Ue' );
define( 'LOGGED_IN_KEY',    '%n[Z%n:F -I>U..x2hV1NrC9|Q]B>C2nT,s2OY6CKhe7D!WUtTU)lR#!Pitj?Q+K' );
define( 'NONCE_KEY',        'w8]-+^ktq)z%_LA>lg(jk-j4{=?u`PSrPCz:cW+OV]NJ_YxuBA^m;b.y!F2(xchY' );
define( 'AUTH_SALT',        '(gt ry]DKL*c>7}Ejs<N$r4o?lx )dF{Zz%ORBbw[Uk6rV6@(ymvp&/-kNh81Rsz' );
define( 'SECURE_AUTH_SALT', 'kq) 0u3fOs2Ook4yDZ(!f( 3i?i3vX={D!sN(_!gQar*UP&o(vz+z!Z:8sjMqK9G' );
define( 'LOGGED_IN_SALT',   ']Fj?MD~{|h*p7+F,cy$58W0opbfdU]FaS?p%B[kgW[I_?LT]cdJ4<&Erq--QvY9w' );
define( 'NONCE_SALT',       'esGBv#klDk?ZEV[-@IE.OpWTRc=(m#ARwk#u4Gbyof1K{~FOg;B% ;GP?Sx]:0;#' );

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
