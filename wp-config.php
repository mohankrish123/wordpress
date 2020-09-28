<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wy`u$UQf2xf*Xg<wB_}tWgaI19ns|q11B~AP9>POU9E|T@K &6E>I|A#^BYQ[`t3');
define('SECURE_AUTH_KEY',  'S9bwlQ-uTmNtX{n5QW$<clME%.2#/x,+6Pz1]CRkMhgnS`ftgn99%3R_aO=vsCd_');
define('LOGGED_IN_KEY',    '*1KcMag|*0-YRlW1Yp6um?p%<vIHV$|t`65&|nT/$=OmYEv|@(OF<liF<wVW+)/j');
define('NONCE_KEY',        'AE_),Ng5LK{@T&PChM+W`h`5Sc8=TjPu<pdX24iqSn[u`T[^2_@{9.5+0|c;4 .U');
define('AUTH_SALT',        'M|({Jl9pa.N=ykMmLnMqmluc?@YC|){_7u^1f/`C!ry29/;k2&W@/@<wR$aP{|(>');
define('SECURE_AUTH_SALT', 'lru@NhFq+1w_54;|_(74(6|~oE@$&b|d]_O1p*T+]{3rf914KC|+ |60L3N=Wgm6');
define('LOGGED_IN_SALT',   'GheTXfzyAvb)k1(r$!@%6cSCCM,*5W}u;k]aq?L$qZ*&b$YXr-|lm&+^OKF2.I.~');
define('NONCE_SALT',       '{r|B;K<%c|hGa,T2O|Oj  fk|GhD=B(Bp1<eS ?o/it{TicI^a0|HMF-Is KJtgo');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
