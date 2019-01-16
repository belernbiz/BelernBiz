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
define('DB_NAME', 'belernbiz_db');

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
define('AUTH_KEY',         'b;nM:Y?eW]4pHf[}kN,3;:kw6-%.g)@0{d+JT~T+-w.HOMd_r{HHVx}i<yh$.O<p');
define('SECURE_AUTH_KEY',  '7<EI[`D;tdoeG|J9WE9iOXU#M!0}eW%5jUB m*Osf0-,Q1HD[N{m0.r(|IdLN|On');
define('LOGGED_IN_KEY',    '{K$_Yp RJ3u!GMUu2x:d6s]M<qTld):<O$eL_m,#cu%o{p>+.BAcu/dC[$@QM{i(');
define('NONCE_KEY',        '-wl7HHiDt5Bs>(5BP:}4%S!)H)Tf2=oIPyXJ:q?w1yt1K2`x.t4D>@fO@bEO3c`.');
define('AUTH_SALT',        'wSrq<K6}RslKwt>)1dz#ki~I2}-[K_Bi0r#Pr{q3;Yf.*Sg9URh!0qyr2`@!(*wd');
define('SECURE_AUTH_SALT', '/.E|I@H.s KsI^`p;UgTbJ?iAi!~p%0L{f7x2Ctn,,1gTqum:Q^wa-p}#D+$-)k4');
define('LOGGED_IN_SALT',   'UWDDhIlBq5,qNXbiL3 *iA;N`oIgCYw1Yb`$t<gx 0v$8Jj:;L]<E1tc]904j!ks');
define('NONCE_SALT',       't<wF-+7z`SWo_9::=R>4|P?5nOk+3nO}S]GDuJBrS*wHx;K@ -?7f{w}XxKJWHqG');

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
