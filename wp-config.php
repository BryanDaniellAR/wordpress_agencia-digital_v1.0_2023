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
define( 'DB_NAME', 'wordpress_agenciadigital' );

/** Database username */
define( 'DB_USER', 'bryanweb' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '!)oK<h$e~ucHE.fK%4@_q!3.yWhq9=5SL~IJF*djwcb=eo /$ N<pf@d~ih_-kZ$' );
define( 'SECURE_AUTH_KEY',  '7i#:t8p}IX={zg+p;VYNl_Ic~AsqWM:!Weu3#.2[+~kwu!!.N}~;^v) 0zKx1Glo' );
define( 'LOGGED_IN_KEY',    'bk]@4Zw* BaoqI$GbKI#)eMq%}X4K}gQ0Ow/?b[$j%Q.Z*x9+9]ta &qeorT#5?D' );
define( 'NONCE_KEY',        '!u~zsjj(B?[NZ{.f7gcAxWavix[AYZPzVQ^#x1dHlG{Yob[U5zUtz1.i7H=w#>$P' );
define( 'AUTH_SALT',        '2fzeY7]NmtV(vGmQW5A[g24fhUdTzFuB?&o|uTo!J5X[_~/M;z+R&0(n~hmO|9@1' );
define( 'SECURE_AUTH_SALT', 'd7?GL>YO0ogPk!CwMg!l&iK`*Ju2dWqGU7%>}H1UNFAnFL-b}-,]m&F?]p!:PxQa' );
define( 'LOGGED_IN_SALT',   'fr65T6C=pV_clBZ/plL}5q?9<^RT.EHG@/?)s(dV?i$+,zOP*WPb=>Un>c~G($-s' );
define( 'NONCE_SALT',       'b[TiH@+z#tI5agLx^zxiwyU9,OM my)BF?H0*CTyA>i9G.tE*jd+t*Iz=X9V .*>' );

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
