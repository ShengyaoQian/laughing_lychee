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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lychee');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ErY=w>FS.Jd7errwjD|@lF-/hcObykH-bR50mxN?{c|L@c!0Sb] uhjFhM}j&Ka<');
define('SECURE_AUTH_KEY',  '*3z7NN+Jig&&H9[E`|!/:++%-@>{ NuN6<QA+qgudO-r99^Z Xua*U?7C=.: .xT');
define('LOGGED_IN_KEY',    'I3e6gBxY8`09`f7wkP+xW,:=rQ}KS,oE|%IBsII}TERuTg,vO,>To(= i2D)TFj+');
define('NONCE_KEY',        'Ew ca9|*]h+J5c-9ccZZ%;bd*zE=5ip54mBKrm<Vszp/eguxs>]bCG9.r6)9M`3b');
define('AUTH_SALT',        'n$$-M>,/*^hJ>}&Lv^xJ7!q(/||08 R$k|CUp,_LMK}nD&GTP-|&,%F]sJhm3Z=X');
define('SECURE_AUTH_SALT', 'z;db0+93@b*g{<;^Ydhpl2m7-p)V8@&GL{od;o3Qj6~EFnM~ZbHY-$NaCCq@KTPL');
define('LOGGED_IN_SALT',   '#O2quI-(LiX|3gh+X=-~BcSI-,V28lOlWav0f[3<|$R7POlr%!J>mb;M>0<HB`^|');
define('NONCE_SALT',       'G@W*ZUo?SpZ3M?ah}jGBYL}??RJ{]qZ=?>P];|sJTL!>yN7v6ALA{O?yRqGpq/LX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'll_';

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
