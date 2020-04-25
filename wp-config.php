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
define('DB_NAME', 'wpjenkins');

/** MySQL database username */
define('DB_USER', 'wpjenkins');

/** MySQL database password */
define('DB_PASSWORD', 'wpjenkins');

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
define('AUTH_KEY',         'IZl,)sIP@d1l&)^cVzC.&3{YM^$&mYwO`64,b7:UMeb7uu=,04BJa?TchU7fP;Hk');
define('SECURE_AUTH_KEY',  'M%{ory$:K42X:aj4cGyAQId6[z]K.Hbr3I4gk%bK!8(he.dLxo,?^xP1jt45m0u#');
define('LOGGED_IN_KEY',    'S#q#@<4,6}m1(KdsOW{m(.j5CleS=?>Sd>T[ qDzrj=8)/]jw4?`vv)FC9U sN&|');
define('NONCE_KEY',        'C9XQ*5~VM-B7*:[YHLp1.Z$OFC-+w^I*ikCr9xAo]GX%S7>y2?NQCJy/A=o]Kl..');
define('AUTH_SALT',        '%r|G.xTEuL23Kyt![hJkTsfo$+=2>aT/>b}Rz231RxIt&&Sm`m{jOq6<9c,EC9G-');
define('SECURE_AUTH_SALT', 'va+uazXbsyK:z^ Jar [iGgJ!uo):u?M3:k.5OVKn(fHOyFZxs)q+QKBx^UY m_B');
define('LOGGED_IN_SALT',   'nvwT`kXNHc tvV,B::kyZ)17k6MJQQ.4-58?Jm(3sP/}CO]ziCr6;x1m,JBYGQCf');
define('NONCE_SALT',       'YVFZdr] 3M=+{,$ g`<~W!YMYa>M)^>sUosFK:tk`+,3h<;:Cp#CP#iOM0e*sG+6');

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
