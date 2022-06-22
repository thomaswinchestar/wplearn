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
define( 'DB_NAME', 'wplearn' );

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
define( 'AUTH_KEY',         ':h$%Ww1qo]Y cZHiV^)mx@zk&0R{IOe%VhY!(w|p5r!$d]:8S.GGPkToK=wqqUwO' );
define( 'SECURE_AUTH_KEY',  'stdi+OJeOMe~yTW=td*D/ud%{HG_PW}!Y3,TA(TY2Hz>uiCR.54<Tjl`=W8DivoD' );
define( 'LOGGED_IN_KEY',    '8wWUI2;mIp?qjW~0+&R-IhL[5Qyq,`6]nHXh^kN8^i^~Sy]FUyeiLo<#*De_`Fp)' );
define( 'NONCE_KEY',        '(kCj>pz%<=dT.i),|KvoM_b)O[r>nq<E-19PbiS)>FxH5@[S|hFnI=q3M#qQg1P(' );
define( 'AUTH_SALT',        'DLO!uDt.rM0Q}0#8X#+pT<tSSj@)lCL354S}2z3ZQSKA==WZmhebGHKPRXw=sm*H' );
define( 'SECURE_AUTH_SALT', '*l655A4?KjR*HxwgIkh+vv{{5+U^jqxFYA*2euswE!7 )@~Ri*c3G20o*IvvgYod' );
define( 'LOGGED_IN_SALT',   'Jy3z.@cS{Ny-m[$>,JR}S-&OlTyf;Vj-9P,WGl7e1a:T-ACa_@HfaG)_YEKBeh,l' );
define( 'NONCE_SALT',       '.Ehu>A<fBeeB0^PbAau,7X92lriqjO(,eY.5xykZ+d^6iClG#:{Y>bN__tEXptEM' );

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
