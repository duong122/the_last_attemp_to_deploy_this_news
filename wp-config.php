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
define( 'DB_NAME', 'deploy_github' );

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
define( 'AUTH_KEY',         '9ZSAp0dImOd}GZ-81avf*ax?5jH]Y^D?V^E&*4(@sHx;SIFA~X%/}66mwoHioVQ$' );
define( 'SECURE_AUTH_KEY',  '|e|o!!WddN^nuiNeUzB{Nl#279 AGE ^]}JhP};#/4&x(>kp1+(e<dlA2W[c)x-r' );
define( 'LOGGED_IN_KEY',    '_FjI/#sdfw5jo`Ao?s1Jv>HhF6g,,@]4$?i^V&@7W4)[9vM<Ht6ilk84gGp?/pqb' );
define( 'NONCE_KEY',        '9:A_1>XKJmg]m+X;gMX0M!h,^3_I_H7Q.Maw=hX);%u*>]V`Vv~OU>XI$uLIk9wV' );
define( 'AUTH_SALT',        'VQ07]Pw|J.&UGJH)Qhkl;0Tb-qXFZ0O}%aGlr9geNkC +6~xLD<y&v&HJG$WXT]o' );
define( 'SECURE_AUTH_SALT', '?xx[xMG(]KSarMak7ssS7h/xcHCIS{Sda8;Mtx#.:Jf_C2Np4Ef^CvNU;C^}T+4Q' );
define( 'LOGGED_IN_SALT',   '$Qj/g6|;7y[fcZlLU[e<*(9{#9xlZ8d#(QNFF)d3Z-aYslt-$AU8nt#iBa|ya^:&' );
define( 'NONCE_SALT',       '![)y0Z3/t[E1806etas}+Sy/sF`Ht?W]nlc=b`D;A1t5RZNrIsNSSVGErD4{d&OC' );

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
