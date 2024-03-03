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
define( 'DB_NAME', 'wp-practices-1' );

/** Database username */
define( 'DB_USER', 'mamun' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'aT%/m)@#%}XKw*k*^qhtX^2y10UpOQxQwIo?T|<s!R3LvK5BLF:rEZYh2$-CH0wy' );
define( 'SECURE_AUTH_KEY',  '^=+g6@Fgf$@c^17^zY{xBg w$v63nzgDnvLQ>&~$sx/bu*C(v-BV@jpP2r!DJL&u' );
define( 'LOGGED_IN_KEY',    '5`oD;aHtlJ_ **md&g_[m[A8cGO!PK (5q7)j3BkqTxzvT+Q+a4Tk.i?E>X081/Q' );
define( 'NONCE_KEY',        'Ke>Y:H[)p0.}l%;15VU71T00$|fY]v+rQWk(Zn6Hqw3R./5lP=r<((L;|L7Po7bn' );
define( 'AUTH_SALT',        'cQPR9@YDqlEa%m0.WaUig`;-ksx9Mb2zmMO]4wFs/~aS+ff;Gf6~EfmP3F=T8%/T' );
define( 'SECURE_AUTH_SALT', 'n^v1g0Zs[sl{El3;crC;t:BI3(0$#j6`nj=-F?WQQe0e>LcY:-4*uXL-?jG+CN{{' );
define( 'LOGGED_IN_SALT',   '~tJ)G|b:/(dZO8Ote:6aS%U6X1GNd#a&fsZ~{J*ma>,=qR)1=FN)~4c?}-{_7Ig5' );
define( 'NONCE_SALT',       '@1:xdt/Y.#d;{o.EUE8r|8DRkneb+,aMaEUvfR2+2NC*B@ .15vB{VaY?}% =/&W' );

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
