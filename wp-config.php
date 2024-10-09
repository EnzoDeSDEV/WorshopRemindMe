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
define( 'DB_NAME', 'workshop2025' );

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
define( 'AUTH_KEY',         '%5U ;=+KEvQEh}J&0m^UH@rZF.?#57Dn7S7kb*UUXM>XSOZ;e|~4XIhI=l@-hAfA' );
define( 'SECURE_AUTH_KEY',  '3{+Av1Mtli<nu!RFUy=8C)(CC#|WHz?fET]ktJ#VmUCAk@f4YuKQ{%T-^h4H/Cs)' );
define( 'LOGGED_IN_KEY',    'h;PT;g<nH-Wid6LN/`47(ofM^9N4z1[yspl+N!<FcF; T4C7Bq(hVAmS7Xks&=R]' );
define( 'NONCE_KEY',        '!RP}:cMK?fkRnm2^ O3XX1S~%<-{]$E [8RJeuSv&,Vs.h@zDNs0R1 )9^LIpVm8' );
define( 'AUTH_SALT',        'S:OvDCkBpCGPH/@M*SUYPV9.N_v,e4oY8#~gCbf]a7o>1%(W *(*z/v~M.HZF&WJ' );
define( 'SECURE_AUTH_SALT', 'J/RiJi-|/wqgHW4Q$JE{}1)UeEmI`Me+B?Ox(4-ba;aSloS26GpH|K!~.?1X$45G' );
define( 'LOGGED_IN_SALT',   '?q1<E<D|*D&c<*o0}g0&(r*J_9QMVQ8dD#;W^KJr>c_L?c~t7r;Y$Dlv1oAN0`h]' );
define( 'NONCE_SALT',       '`J,:,z7hyaYo| #_c$Ca!p1+bjLcO&etvt[uif9.OCuYq$O8`W}<T,mP5U~%%MCl' );

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
