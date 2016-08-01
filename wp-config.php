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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '&AedV9^u[xa~cc10`*%FkgL39y^En#D>.-,iSrl>.q2?Fs!?CD:YoUCWUo(*saY8');
define('SECURE_AUTH_KEY',  'QJX;Tq1n_Bv(`^#00(0?Ru;=wmqkG(lFr?,ID~zamJ<c|W$*c2+[L.!+P_l_9%,?');
define('LOGGED_IN_KEY',    '[_6:E0gHR-jhoh ny)*~w|]-mMEjT>/fZ)e156D?U&*3IF#Tr,UFkTOxs |90{+o');
define('NONCE_KEY',        ';X0`9LR~fi:m1>2(L]H>8m-F<PftSt2^rQ[sd}#W}=V%Orpt>+&j2^NV=Iw#==Nw');
define('AUTH_SALT',        'qb9cAaq-ZqYlvlELUPh8Dy*p~Dv]^`Yn>Gm1D5D<=|c`:6wVO5(Iz$IiaZ$RR.~1');
define('SECURE_AUTH_SALT', '!(|Rv/jJ!.M9Ht!1X;fEmH`HfujJU],6$R*bL!GYvqP 0Apfsr!G>gA5 S#Z((uN');
define('LOGGED_IN_SALT',   '!(.hi#<|3~7Y,%zfSxm4)pKeOP$v9&^vdla/ :d>~/n`rC19&s*+H8dq?p%L{$~z');
define('NONCE_SALT',       'Vq*:c/FVjw+2}<]wPUs7+|mAU>6[PwGS8|@&*sAnL{s<m?_)rg&G,}!*Nk$%3FhL');

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
