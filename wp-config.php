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
define( 'DB_NAME', 'trangbao' );

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
define( 'AUTH_KEY',         'D$.f>g8z5C2W>Q7otXU%0h0.:/ _SGwy$8KS!z8twVI4XqWut4{tLzfi%}3}1$OQ' );
define( 'SECURE_AUTH_KEY',  '=PFA,:~&)Fb5CR`VV,(oTM.z>pbuyA=s~xFDxiM&V+UZ(p<e`qrT~Kd}Q&?7*OoZ' );
define( 'LOGGED_IN_KEY',    '- wyJ>T3JbUIgQL+]dSb~k3fFV.-{-]5kLRMo0E@V-v9 *Y/5;TXENHxad7I1G)W' );
define( 'NONCE_KEY',        'q6DZ+}z=_VxN6n+u.LaY6+O!mRM!J+oJdRO/BT{rsKN8hucIlCPbwkFaq)NoLjJE' );
define( 'AUTH_SALT',        'pxp`Dhu+5?D!a2HGowZ2*Pi8;muJ6P^lUAFs1iM,|&KznNfGe!RY6Gz5UC$@Oep<' );
define( 'SECURE_AUTH_SALT', 'Z-4MYG<TC5KI(MwZP0+<+rQW5n%mE-?kvW#zkktX%au.`QS(( oZ1sIb`c#suGMy' );
define( 'LOGGED_IN_SALT',   '6K>]d@cr5nbY(nuvLMHhz^0Glu>X^`NHl9AI}-r8Q`>cqGkp$cDHxII?^WO*V;:Y' );
define( 'NONCE_SALT',       'SVT 6 njZ:ZR<hF9c<1|Eo@n zK8m=yH>[Z`>sgQ2MfSE)EMZ30J.#$Gg0(0Yrav' );

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
