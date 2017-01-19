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
define('DB_NAME', 'seniorfreedom');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '%,WuH:QInc?y!ysRhE_nrCka]H{f-8fn)!mEj!?w~`qf^-Q<p^</MGfPObdP5-@G');
define('SECURE_AUTH_KEY',  'O&]Di{,rl>3?1VJ<F+@;_g,`H@z/T*+h}D6XV0F-B)Vqk.;X*xR_.qjh$aPLvj[T');
define('LOGGED_IN_KEY',    'v(xyD?xs|(p`>{PO#{N?Y5m6v+l:}6OG{?D1k!Y5xtyKVF[`8i*3u6/]!8tAgpBz');
define('NONCE_KEY',        'kD=u ds!QTIxQFvkN4IJF9vZ&??yy#<6I^7hWIw[pT!fyS#zQ^079G]R2Ew2GAL#');
define('AUTH_SALT',        '>xk[}~_D_-X:E8BDBhm_l~3H*mwe{sjs;u-T!{V@c_ku]vCLLyH}P =0do|A|7_k');
define('SECURE_AUTH_SALT', 'N-vDA7jJ-67i1*Wvz0Yc,.%C:A:xMC2mKY-?F30iD^(2,>VT.Amd`U6U*g@3Ogmv');
define('LOGGED_IN_SALT',   'p0o`{0lA_rlKp`H`glFJ{7fio8i!y&MKR00hO],rIs[2bF|Q<CmH]V]9FNon?DC^');
define('NONCE_SALT',       'msCc~|BQh[!yCBxGs(0[)_[eEOZ,zu]&At,.hZpTr][C%R#Ak@DV.pw=`V64j$>q');

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
