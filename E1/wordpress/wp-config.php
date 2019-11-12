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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'speed_test_e1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Er<EK9(Sb1>:`E9{[|rw0;zk~^j*!E-?=9ig+^B3g^B-M>})vXm(:xj2V|auH7A6');
define('SECURE_AUTH_KEY',  ';Vo`LBL&*Bn!2UhbUq :eDr5`xS1<}?w,0:U{XBzp=<rcQ:-?<!MlK9QxBBU{gjI');
define('LOGGED_IN_KEY',    '_&!hM,U[,64-29|Z|dPh~v@l3efw`U^07 TMDw@JR.?]wAkwh=}Iq0LFa;2Lvl-F');
define('NONCE_KEY',        'jG|/Fov0A1Ks}n[MjPbT1*;_f$;uq|/.>@ *_e.@N~U14ZgU:a[lp433|mlaK<[~');
define('AUTH_SALT',        'O+~oi1nC$F:WSQGkdXHc-u1P_ea8fgq,s[tkChojN{z{(5CVA[?x^$IyEK)ouY!+');
define('SECURE_AUTH_SALT', '8x:{{7/FI_Pbq[NwAlf(m,J$a&vvTylM:2*=nI7Wd,)uppy4-n5mq8}-`68:IDaH');
define('LOGGED_IN_SALT',   '[zVb ctPMP^Z0@:tmE+.l.;VS_^5`z^0U ZrFXHtsV.mJ02;AXI}1!DC~s}%quVI');
define('NONCE_SALT',       'Z&L,PzLH5lyXig{Ke7)kIl)18#K2vmolb&Iz`yCisCIr:Qa!FEp*))&Y)NDQ(Ovi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
