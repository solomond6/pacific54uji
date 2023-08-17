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
define( 'DB_NAME', 'pacific54' );

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
define( 'AUTH_KEY',         '[<MO$-8$Rr+Z$,w.CS/mh:zn~-Lzb]id<ntTYR8.pU8GY!yg6&PLDN*}`WM/.16:' );
define( 'SECURE_AUTH_KEY',  ':IF].$%K{J-wi%`UMD[`mqF YW&1R7!Z 4TPnlvyxDk5g9?K&%i/O|AE`I~di%`<' );
define( 'LOGGED_IN_KEY',    '-B9 v9KXGh;$D9JUe3kOf>Y,c.*e-a3o_Y}d_1(58_V4|+xz|}U1G:o~P]GL^>qK' );
define( 'NONCE_KEY',        '~PfUizFIhq8/x08?#o<9E xJJ9A#_jMP][qDF]`1;;:pwC7f=t.Xk0:T)6j&WviQ' );
define( 'AUTH_SALT',        '_R!Gg7I^R$.z&Uej~bj4{FL.u7p,R5t=~%~!dW~sjl[Imm7dxlD+EG@nt/7tSv12' );
define( 'SECURE_AUTH_SALT', 'nuuC?:,Zz85Oirh@7&u=:hrQr=hLk~:*Km?roU97X1A2=lxyJv{Yw@5[OF];/U S' );
define( 'LOGGED_IN_SALT',   'QgB}q hF}1iXcgAv_U/6>DGK~]o*@3}41o.A ,L/&O:-7`IQ];*d3hFU>p6*_ksG' );
define( 'NONCE_SALT',       '2Cb3Ww)42o:v`C`T#I=Mb<^$C`dOlLWkVS(U,Pc@V/eKLa<l4:o6_P=r3x<Mc>Dt' );

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
