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
define( 'DB_NAME', 'noorlogic' );

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
define( 'AUTH_KEY',         'PeiDU]|K oQuR&zP+Wl|S2xeo,J4(ZW[9V6Clbvjn%iptO3]ix2if-|1$f^7Lry-' );
define( 'SECURE_AUTH_KEY',  'qyG4|R:6,S]xZ`KI/eo!=NGO*)>>iR!P?-wY)/gB!;2?`;4}Aq.60!q8HW2Jm6SP' );
define( 'LOGGED_IN_KEY',    ',+Z!#AjJ:^w3uqbCgy_|8u.$mnBh!;u*nGH1RYp*fQ~a.BOOUG,C.<;C:*LjsoaL' );
define( 'NONCE_KEY',        'BLyY`~h2Qe(#T-8BMXes:#EW<23;69j5-8wZ[Ia_2KtY]#`M&$U7$A3RE|m?}L{:' );
define( 'AUTH_SALT',        'Qz-Rlp/CL#yw!5(|C(xfJ+nE.HREm rh4%Bxv-N*I[N0Z$D3MT}Kk9zF_oXPyMEw' );
define( 'SECURE_AUTH_SALT', '6GUH|*N4C*D*HgjTgQ6x$<%wWxL~y8~5.ONt@m;o=G-Q1@%?* SXVB1dJpj6q-{b' );
define( 'LOGGED_IN_SALT',   'mc%^)P |R-dplQ5:tv0um)$j@z+M+8%2`r.`+crIk#_-)tmXgty:9]fg$kTJ[l38' );
define( 'NONCE_SALT',       'Jta#k*8h;Ptsa{4r9HpUo%(uBvpMT~Y__;5+C._|4Q2:9g+X,^r_$8^?5=2,&km,' );

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
