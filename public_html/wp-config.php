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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/ganga.one/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'ganga_one_db' );

/** MySQL database username */
define( 'DB_USER', 'ganga_one' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wxERfmpeH2Ak' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql59.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          't?lvNvQT&F6!=0:kwN=!H9*D?npEmo6dYA,S;Rv-P=DJN)P+Hl4rR*11/{RkCQ;B' );
define( 'SECURE_AUTH_KEY',   'eOlD&W~psYz@6xpJxb#mAnePj!YeF]B/wE5ni}3@p7kNBER|>];VYFoN3G&oPiXu' );
define( 'LOGGED_IN_KEY',     'N&0R~Q-vZ>VZV<N%>S(JofUCY?8,n>3}1_jWVPCr-dut*o5q!jZ.GRy8Sc[L<1=(' );
define( 'NONCE_KEY',         'F#,)~BPBUrzno6lEe@[d]RO|od1k|pS//}W>D&`TTE|V8eL;j;HKK_{X}EKX)M%H' );
define( 'AUTH_SALT',         'YW37[=R~zi0=;dQ/,S77UN]Tn]oi%1mmcepHmC:FWc,guLS4!s;G&Nx[$(X*Y:3!' );
define( 'SECURE_AUTH_SALT',  'k^fq}c*5&o3Q%NnV($_Z63 Gm[?Ryc_)EX9kU/t4]s#+wj=5I@T)]uAdpSY#vI9d' );
define( 'LOGGED_IN_SALT',    'OgU?#F#v&-:]}[KqYvOtkP-oa6YZmd3@44Jpi@u_XJM1!03QDWFF@o/^m=&=x8[9' );
define( 'NONCE_SALT',        '-%W%>U1L]+:,o}lM]w!R!Z:SywNr].R[~McH>AlmYo}hnP*.}Mi@+>E&$.WbkhIX' );
define( 'WP_CACHE_KEY_SALT', 'PEW&A@$!uq4=Lt8vEjDbvRY74yPh&pE*ZA)M9;A{D3;mV;DT5P/qP })kaE#m+YS' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clk_298d91c142_';




define( 'WP_MEMORY_LIMIT', ini_get('memory_limit') );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
