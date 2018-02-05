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
define('DB_PASSWORD', 'e68f3f5963ee4cb60a726e8c67');

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
define('AUTH_KEY',         'Wo{vKdEcH[|AcCMS0j1}o>zQZC;sR+Tufs|-5}[c*87lM?h.jeQiy4f>cVRXZq23');
define('SECURE_AUTH_KEY',  'aKlO#o@Q<!>?@hrgZrtdis+;!hK2;=V 2[[kpeWG[x)*KftJs&o5dY~wFdq)F{;~');
define('LOGGED_IN_KEY',    'w~}M|a_*/1/!5NAM }&~>E!.}PLcfZEz/^L60uhAmLxMh:smz3&>hVp&UBtOrcIH');
define('NONCE_KEY',        'dAZsB{TWxo().AIx$fb]bygh=|}mXhwTCh$V#.TPWf9vU(]*9C/ubCwbro}H_xX6');
define('AUTH_SALT',        '2Fc-Jl*<Jj!Nx8)&bs<9BpIp?elMqd%!!r5auAM}w1EflO,d7+xt~Tht,[Y[-&76');
define('SECURE_AUTH_SALT', 'w6.Cr$C$S{-LL@*rs:ad]@nk^H@vr,YkH]w(St+hkv|>h_gFdD(D<Cnw_3/M_*g[');
define('LOGGED_IN_SALT',   '{@R{=19>qye_{)z5t{Nh;XtEwU:nb1nWt%+1%fcE-1sEAYlA ~Y8_wx5$5h|=uX=');
define('NONCE_SALT',       'j{vyTRp(!Jatk:)3t$:%-{4H*/,T9N{p3KRX?jw[R+Kn8bYOj  _$(m6Y6Z)P?Ok');

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
