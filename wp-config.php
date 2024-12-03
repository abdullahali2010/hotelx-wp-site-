<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}PX>V0cUE|Fs|y]Iyi<gXmF)`;2pz@mU&=t%+r9#O{Z<e%bL6HVvG_LC+>dC!G#6' );
define( 'SECURE_AUTH_KEY',  '&;$U+LJ=h(I`0xJ@25*jI[Wafa33-`o:&O<AlJ$bfjDY^:B+kb`ESM!KFQ#J%q*Q' );
define( 'LOGGED_IN_KEY',    'EkdM}ejd:;7F_.^<GgL&#:{k1xd&B%1k}PcG9,@ocQsggh4kG[(Ka n.U7<bcOpY' );
define( 'NONCE_KEY',        '0r<%8v}2gXsldCMnw+BE%(8PkYMCd]Q7s{I#.O-*CMdJCFas8dO1xO29ZpmC39R]' );
define( 'AUTH_SALT',        '>,@8sN1W0)D>^CB@%ejVHtUK6Z`3ji@8Q,MY?][78pq#O(qrRmT[B!*8_15W.3~S' );
define( 'SECURE_AUTH_SALT', 'll,D5zQYo*;7Uw>1@ HZ a ew:k+UYlEJfj1(K6VPC^cGBf_:WhZuoOD{Z.X{2!k' );
define( 'LOGGED_IN_SALT',   ')Rr`ZuB(gEL3pX=$LS!_!.VBsU@_/vvm`K`X M>fmq9A]xYt^xL)B7x(Vw,j{_U>' );
define( 'NONCE_SALT',       'l qC}1FEsYCMlz&{i-N|+DCYTNps/9N 3X=wq-S76{mhN<scTXE+c2xaimBdp1!8' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
