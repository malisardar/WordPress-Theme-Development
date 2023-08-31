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
define( 'DB_NAME', 'wp_task' );

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
define( 'AUTH_KEY',         'X}R]=Dg]jCJhOINK0>M_p/2SQ+t41?#pVOW2~HM26.A-A,PO!|qtLW@.TG-|VmgD' );
define( 'SECURE_AUTH_KEY',  '6hKTVv~N!1_|GEqL&OBnZE{-(jUV{h7@*Dcj jWo>7Ef*=gik@xVV$r--WFzNxD;' );
define( 'LOGGED_IN_KEY',    'fX}*`${7R82^][}?BN!c8]d$@y_LwLd>>Ib[-nnQ9$D.k;(WH5^o$spt-W61VY4d' );
define( 'NONCE_KEY',        '[|Pgz9Dc/j#[~PV%G%oI*49jf^b2js^1#TshWc1/ltG]96]206PT+1Q]}5HDoz:6' );
define( 'AUTH_SALT',        '=pI~$!njM>scnR,rdU~;~mJk=N*f4X+#^aO#FkeBu<y7z5`9IktOz^j}d?Xz[{=y' );
define( 'SECURE_AUTH_SALT', '&[MAE!p&VXDO2*LE;mB.C5(TbRmhvRv6<Z<MHTt[$fY#+= TK>_}mr 9sY5{g}8m' );
define( 'LOGGED_IN_SALT',   'H21qo>&h*o(iHa*!VtH~A|QG>,0pkA0.vb3~*]9WWS)Q G]R-45q-tu[J_2M*8}^' );
define( 'NONCE_SALT',       'LxDCZ63e9ONLwtt9;erSmElhAXY%7)X9|j+VW>K;!(,3J{~wP.9w2y)9x@Sjrns&' );

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
