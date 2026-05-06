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
define( 'AUTH_KEY',          'Yrl[dW3AU^->wH8e/hjNXguzgms&7<@^:n++JYGq_flvhooP^<B(w/;jKSfd|VG}' );
define( 'SECURE_AUTH_KEY',   '^M1Eh8mfXwk[<-Tz{1gU8f3&K=W4IC|&H81d+=OrP]lfEDe*0)jY<YY>;!u6XmvB' );
define( 'LOGGED_IN_KEY',     'f5ej=gm.ECuKCv@#dlhkY*h},sMsi<=akVSIAAGiND)W~i1E)U32ik&a[b9J!ulG' );
define( 'NONCE_KEY',         'QCMz6cOE`iXp}QJTISfPN./?f:W8Wo6n:GL:*#<b(mU/;V$`$1;r:dbqT!dZJr/C' );
define( 'AUTH_SALT',         'czh]9q6T)!kXsAI2L:}{tt3WG^F&X_4l2|T3(kx={2pp|QT6A_^f^9V9<ig2Q({Y' );
define( 'SECURE_AUTH_SALT',  'YA_g+m#iGM,93F~3B_0exS?~NAWP%/PhrvwsFKNd%6gqnTqA;?i}M[#jjaA-q4f.' );
define( 'LOGGED_IN_SALT',    'cA`TnR$fEmrkN6n^})6OH^UHJr3uSl>=,3fn8MHxW)2TtxZ[t(%CA96,:[^Rb4kc' );
define( 'NONCE_SALT',        '?)amLmP65^9`!gCRurY9}^C}d4]DUZ2K~oS]G)(}>4ksjH~664DO59Ssf{R&na.1' );
define( 'WP_CACHE_KEY_SALT', '~!LBXS1;=?$mTpWYI<O5Bq06upJ?(%h&QNTLInk~ph&wV/F%8qg;Ts7rZ^#7R4_r' );


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
