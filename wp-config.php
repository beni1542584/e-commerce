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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ',{<oZxIeLj?MJ[!JgeZ4i9|c[ClCSHqI:7BTKS6%i}r<2cQ~Qvle{|Pey`HsAnH{' );
define( 'SECURE_AUTH_KEY',   ')H_xi_AZk,|fl->]>b6$s%<:udTJ-.LhYdm){{:d6eM>a]b>=?v<oOfdgAA4AK&N' );
define( 'LOGGED_IN_KEY',     'O2LW5H8N_Kj,>LynpZVSZO|U50:n/Jz,kr;,iru=A5Ywjh9Rg9V}*~0vo~1vQw+q' );
define( 'NONCE_KEY',         ']6DURp=|7EW[e]S`S&OOXH&&*k6$*=a:wetbucXdt;P+f~Yn++<v`6bsH&i5Bk{A' );
define( 'AUTH_SALT',         'H,-I%)*0S{H|}9qDRK&?FBN=<W*.Oam^;!}={_ry8Y8p ;:}yr%#zF01mYH^>ck>' );
define( 'SECURE_AUTH_SALT',  'RNB4|-:Mm>SWMyzjNZ0w =^jg[48E*(I{{[^=P6kOwX=W>H5<iA96_y)wtR:;^t/' );
define( 'LOGGED_IN_SALT',    'g o~/*HL:<yzl-50HjJ-X&6oc=#t+/k8`U^y^%MkDHd1Qr#2{BT+/$=5v 6++P.B' );
define( 'NONCE_SALT',        '/xz_rwH<,6]lR(V-H1lTB^(H>bsuD^,rbabm:R:Oh3x.L3) hRW!eRLg%o$W-zOL' );
define( 'WP_CACHE_KEY_SALT', 'JFSFq>W5L]X?|}Vo Xu{!b$y7,d>tR( Bf[Jx@-[|4tqEY*x5B_H82_HtCGv$BUl' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
