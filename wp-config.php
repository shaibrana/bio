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
define('DB_NAME', 'bio');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'lbqqQT0E,LFD');

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
define('AUTH_KEY',         'Q$F;Jg[~D^I1X%gDIaEDH+nPp9/eym2z*gr4Xuehu m-?a,AJ0bKW)t9]qVLDswd');
define('SECURE_AUTH_KEY',  '1Hy3bknFcXU7^cDH-MHsu ?|%,S)HF-Rj2nJ.KeD]XG#HhP^j@mtrJBQg@NVxV]0');
define('LOGGED_IN_KEY',    '(zFnqK$zIvN5&Cxoq(qIP:H%scXiDk;mC8*Hl;ULjlw?;mC7A//d z`b.0QMF9$=');
define('NONCE_KEY',        '0>5hIZWA<:Q7T9I38;FDT(U3JSqI?f-C8j:VsPX_Cw{34*4G}2_Q!U:u~[QKY;P|');
define('AUTH_SALT',        'K >{iWA]9}&k1#E2>QApoG@Q=zd2Hl)9_~AY3;-`]F^2B@TZ/<oreZc)>fpF7r!9');
define('SECURE_AUTH_SALT', 'k3,D6iuCA]7KVkJ6@_m7`tC|ew0Ir#;uzPA=9P{<6XpuEzDq[g~TZqnG];c6Uw|l');
define('LOGGED_IN_SALT',   ',**|enrBsx!d{*Gq)rmcbj)x414bvpv:~RY@+X=:Q>2+uSvH-qfC]O12.{26,J!&');
define('NONCE_SALT',       'F~RE+x,}}#4S3(MIx7wR<1d3cEZ<cC?MV^?G)abN1zvrx2ZV;Jl^h%=3#B5h<&L%');

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
