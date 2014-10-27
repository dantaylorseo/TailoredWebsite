<?php
//The entry below were created by iThemes Security to disable the file editor
define( 'DISALLOW_FILE_EDIT', true );

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
define('DB_NAME', 'tailored_2014');

/** MySQL database username */
define('DB_USER', 'tailored_2014');

/** MySQL database password */
define('DB_PASSWORD', '=R}&A{0w2@O-');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
// Test
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f(trv,.p@*B-8jIv=xC:9M;/S$gK<IJTT~fu@w)`TV&*-02-|Ehi);39-6Zox2T8');
define('SECURE_AUTH_KEY',  'b> [jiZ-8x(813p<BCw$;?jiKX4KRK#+A9DIAi629 DX=^g0GcejL$yYpqHN0k<X');
define('LOGGED_IN_KEY',    '_0]1}=<_;yAI@]G3I]mB?,w/UdJ-s)>}eP1k96H[xK[e8QK#|hiV]c!Ghw O=1Ly');
define('NONCE_KEY',        'Gj<@bnO}4BsO/n@U[37ePu^|(1+ZFV7r=~V,c~WKMfE!QhF=P7m-FQ?QtD|aJ-]F');
define('AUTH_SALT',        'wg[$9:pz%)?UgY2RTJ*|eS{2J2}UV!u>atF{y$]y5M,9t[FcP^G1?d /mx+jAqvO');
define('SECURE_AUTH_SALT', 'g%SF(Z^?ZhG:[_&&.Uwop`=dk>D;I8o,CSX?QR4%8,3b)#GS+eZZVHqx->NOH4Y ');
define('LOGGED_IN_SALT',   'C-z5vSDVE6*q>U/%[4l4iMx[*_YphBe{x)&CpZZ7eFg9mRk+d`+$UYEE+%/YqrE<');
define('NONCE_SALT',       'PF?dXFO3-lrPC^Ukm=kjl3<+GfSjRzB:<qehe-yF66kB=e;1Wx^L2dcLc-$m;d/{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xsg51l7_';

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
