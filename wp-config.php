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
define( 'DB_NAME', 'dbpa13003UserWp' );

/** MySQL database username */
define( 'DB_USER', 'wppa13003User' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pa13003' );

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
define( 'AUTH_KEY',         '@.C 9hmA>%fzqbK)%6h*MeU%$Xb/o$wi,TnGT<B][Cz1=( LcRTtNT193Z^cw!KB' );
define( 'SECURE_AUTH_KEY',  'v>nF:Lw_Bs5Y|5h2:u2>K0xKd*#_@{mRy$L&fF$sZ]@#,}|KKp3EGL8,vH0L~pyR' );
define( 'LOGGED_IN_KEY',    'v>fjt6if8?oo_`wch$ueY8bCm`Ep8OArrVuH?(wgK8zivmMO8T.vzUp1_.uO}<~c' );
define( 'NONCE_KEY',        '&c>1nHB]aXFSX@k/:2.sY2L>x.t33/uFc] Ktb&p-k>T^q,%R?J7c_uE^NqF|5Nw' );
define( 'AUTH_SALT',        '8- ~1*$s%H~|WYY5V^R>h:t&2V<H}Tg@yW(?qrE+}2>X^r57Le45PgN/kXN0:H40' );
define( 'SECURE_AUTH_SALT', '3={hvX)/P/>l)W.L pZH+fG/~~Mf`7F:`]B$lly=6dLLbI,0kP*86%d=7|TQJg<T' );
define( 'LOGGED_IN_SALT',   '2#XsqU@^>>D)[aU`)9vE_*NU?Q=[?CY!EUwRf.d^0_o>Nrlq?$l%FkTw#9?xM58a' );
define( 'NONCE_SALT',       '.7XH#((U ]Zq Wp,%*-^}ZT4tm?SUPJCH=,%CBjq<xvsNkHDBk|jFn+La_^Hwj#H' );

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
