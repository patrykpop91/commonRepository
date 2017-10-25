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
define('DB_NAME', 'wp_repo');

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
define('AUTH_KEY',         'b1Lb_5v1j3`Ly%w[3E|CUBj~_g*DlbDY_P23^n~9>(:?@V#YW8mWn_@WVx2e.!(R');
define('SECURE_AUTH_KEY',  '|pkJvDI4bf<x-y7Q!67E60M[5@]CuuRt+v}$$JH1022sX?nk^ewpG7rT[bFR`~X[');
define('LOGGED_IN_KEY',    '^OPv%V0fxwT,uIS -y80E;cO@|E@v$#1_)k2h!m2rsx|JB(q-S?7!mTJuDZ9O,O,');
define('NONCE_KEY',        'Q.4Gh{dd9/P!20Bxpn{3Si` RN<;L`ZY),?Lq_]1ZZCR_NakB@)7G4`(U&NsJm8e');
define('AUTH_SALT',        'NYnC >uimodTrQqEqmMyw?F ``nTIrhd&tg8}BR)7Ta55i5lS}5EGg1t?2ce|Swo');
define('SECURE_AUTH_SALT', '3Cquf|>B/oJD+/E9chInDQoT5,E3?dhm7DM?*hc/.Q}:Z q7%8WYwY5]tR)3TG9t');
define('LOGGED_IN_SALT',   'Gvar+%C$^)y_O[E}QMqE?$hfovHSTkbYL[j~$6#bM735-How13:zpjr-@F@#{<UL');
define('NONCE_SALT',       ',(qnd0+y<:z,0e(7{:MUut)Q-=1dlh6xNak]vI=#+6gc.@RU+/hVgT_GsvEvBqj0');

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
