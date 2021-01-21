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
define( 'DB_NAME', 'testwordpresswebsite_db' );

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
define( 'AUTH_KEY',         '0 *2jUv0,DgVX,AC+YU/trU4y&h|q?t$x09u Iq|q<TNiZR$325`IbycQ!K0Bu6[' );
define( 'SECURE_AUTH_KEY',  'SkK14@PXmr.5qU.#3Gn)-lW)_Q_{tOaf`0T8UYZV&]osR?cNM]Ip?-:Al5;:Zr6T' );
define( 'LOGGED_IN_KEY',    '#vkfMg=&T+`S>6_v`%J^h 74f:BxbP]1oTLohzB2 -&C&GtoMW.nuGyYl-h,P!Ha' );
define( 'NONCE_KEY',        'yA$u<2jfgssLqnJ{@:- u{:h,*PUMZj06uN{2QPBd)%$&w96dPj_{}q^qnj2L$iZ' );
define( 'AUTH_SALT',        '.;wp6%<N2_{BR_mh$A@]^8#H}d.u0[7Yjzk!,}MgC}o, yK2az_(:L?om#LNTzn2' );
define( 'SECURE_AUTH_SALT', 'goyRf%H1888&ED*L.,ngZN(cbeYocs:Eg!w}DgGcz6Ai5m>G4M_MNy2;NFxw$ZTt' );
define( 'LOGGED_IN_SALT',   '$OGqk@1m:;.{>oTN]2IJSuB&@}MvLW}*c.=dc[a&ohZf0x:`{,9S8bPe;>T>3 +Z' );
define( 'NONCE_SALT',       'jh-9MW8 yGH=[ci`QF:6{|X3&xLQ&H8w9cvj-zbH.,F+_IvUuazfTO.^JX+ROmh*' );

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
