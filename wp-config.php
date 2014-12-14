<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/*define('WP_DEBUG', true);*/
/*define('WP_DEBUG_DISPLAY', true);*/


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'fip86AiSqT');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'BI_s`rGv,3v!M.N~ta3f@/Dy0+xVh%3kzw`3OIOI),eu}m.}`W#rrXH&]-.3xw_>');
define('SECURE_AUTH_KEY',  'D-;%zl).maRoCM,BFgTKW7A9D:8_IMeG;:G+<(fql8R6R<i[3:jMYcPGr[hQ8s?9');
define('LOGGED_IN_KEY',    'B$A(?mmX=8KcbX&Ko^=F^Oqf(vLuU3mw?EL#9TS|F!G.+vgdcX$tWzT@iy_-^Si1');
define('NONCE_KEY',        '@e28d{Vzm83xgpqy)}mAm%=xrrgfdL;K7^j3hSI]w5X*tT8yhBBC=~C{j<:yc}}!');
define('AUTH_SALT',        ';W!3RuKYRsmIa0r3A>Vyz5~1a>F~kSqP^+n&<WMj_W_E 0g)$/2J&>Ow]Y/7`Of/');
define('SECURE_AUTH_SALT', 'czJ^[*upYhsLfNi}peXIpu,jKmE2kO0b-^[~,F++NO*kfJ&W^u/X,d af/lh~8;)');
define('LOGGED_IN_SALT',   '80<nhw/yISz%P0@.5qc;`=%HCaQ(d[(&!_AgckOlL{Jrpi5^ S<P@&lS:2HmUMMw');
define('NONCE_SALT',       '5.)*$x.FGQ$^:6$#`h]H+Eih!f@%(lsB2`meza?.b4|508k#b(>/)3l$n( ^ju%z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
