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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dromenade' );

/** Database username */
define( 'DB_USER', 'diane' );

/** Database password */
define( 'DB_PASSWORD', 'bdd456mp*moi' );

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
define( 'AUTH_KEY',         '.oDc>hHt?~I[CnZD1Ktt(}9QhhyEO3<}h&_UKhgHKv9B]k0cZ7@RuW:Gs,PSr!gN' );
define( 'SECURE_AUTH_KEY',  '#?7`h;.j4<qnQ7WAx=~xa/HTcNR.|<a25r!S%3R0p.|TjxTM3R~nBX!_C`<vqr3P' );
define( 'LOGGED_IN_KEY',    'ijP;,w ;nzij]h;-vr]Yev^qC@`I;`#D43(@J=!]`>fZ7D|(Krdz&d01}OR% 2KV' );
define( 'NONCE_KEY',        '4-/=[l!]D0,NUDYZGQJPSGQM0<U(z=F_.]bF/.Js4(*%9 ^^~kL|zVhvX^2TdnQK' );
define( 'AUTH_SALT',        '<Y~0[C(EY1|IkK[1@uH=K0a~$)w9iefN^Rh!&60ZGFVy>g4Zm|aiHZ86~VtgDxwx' );
define( 'SECURE_AUTH_SALT', 'o{>_{iE@* ]6zzRu^`YjO]l(0fZr.5PU{fAV4-I%yf^J4[es|>3^NZd/w].1&AhH' );
define( 'LOGGED_IN_SALT',   'zhQ%X~(j3OBS~NgLd<(-CBTmj=N^DIN72348:1WZ(,9#7pj<LW_fy,8 y=]&XTNu' );
define( 'NONCE_SALT',       'WX&y2Ouc<1T,[A+rck;J[i*0$$3Rsu7*=xoCM1Qv:a^k$<Zy3e#(+7xTY9RFRK|)' );

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
