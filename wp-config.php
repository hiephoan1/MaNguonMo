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
define( 'DB_NAME', 'Hiep' );

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
define( 'AUTH_KEY',         ';l?,{ts|6J,5AE+Yh&1.mj3M2^b6):d6yzTy#Q}H}nWcwJmB&8aT~JB7.0I8?G1{' );
define( 'SECURE_AUTH_KEY',  'Qf(B)+s2`$A k&y[^0rRDMP?r^-j N63e(NkT,_Ym4*)rc+TIn)$MsPGTFOIVvzR' );
define( 'LOGGED_IN_KEY',    'q{y(v1/(6#^R[l@eHmq&&&T%njY*h}ifNuO!82fX4@*5 <Ao6WrsSo/w7z0BRfqg' );
define( 'NONCE_KEY',        'h,~vHsCrG[`UpZvi+p 4}u80dMi)FM<a33N+]WPYi$fms(;.#AjNEBCh](=!L7 E' );
define( 'AUTH_SALT',        '^Ghpf +]3qi%VI4Fpy4oeQ@Nv {*^S/bv5pehesdN6Q.m/h*he~^u]&:(oA=g{H;' );
define( 'SECURE_AUTH_SALT', 'MF`lz.p*_2gObLSUeQZ`DiW|Bt!}hvd#ly$hI2D12~-`|VJ.01xao6n>xHSjNI3C' );
define( 'LOGGED_IN_SALT',   '7%`>;W8M999K=yt5=ZswvQcr`!MQHD$Y7DaG=ZfZ~HfwRZCcgn)!RcNTV;qe.]~I' );
define( 'NONCE_SALT',       'bC*,~wi(r*XgKv;oTo&53f6SIn/%9XzPx&={U^%%LZoU46~OB_WCP8%7.l<6h%ee' );

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
