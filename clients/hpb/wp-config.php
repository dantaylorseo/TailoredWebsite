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
define('DB_NAME', 'tailored_hpb');

/** MySQL database username */
define('DB_USER', 'tailored_hpb');

/** MySQL database password */
define('DB_PASSWORD', 'ANR^OQabbi49');

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
define('AUTH_KEY',         '@ Q3XLmNZXSvs&!k;aSK!ltS,BiAn)3nhoXMh7Rc8?vBsOA{[{PrDoq2~AzWB4-4');
define('SECURE_AUTH_KEY',  'pP?j|Az3=OK?OaOR-Z5}r][nfwuxpD|-_qu:k^tALNoF=rp$l2a:0PPBcl-@KCEV');
define('LOGGED_IN_KEY',    '-6Yx$Zh$wh[&-+6KHRQ4Le]eNyD&]z4[_wj_GZ-|Kj)z=E5s%jN`l#RRA,]H@=pd');
define('NONCE_KEY',        'O>I}rF&9|QUq]dk,s[2dnwH_|6.0a +uywqZaMx}(2Sm(.owm>?&SI~kCZ[GCTdA');
define('AUTH_SALT',        '-4*^a~m-fofkx7p`y{QwxK8p%]-PlNxh$$P<Q8j+SC,ep/?i5FHP2z<-Ms?G|U5p');
define('SECURE_AUTH_SALT', 'jq k<oQF:o~!DT$&oEIIByomiF{n|QBr|9=U}q+aAE-J;z@.87q}IG(YlCpZS(*k');
define('LOGGED_IN_SALT',   '#%hzsD@Z(55}1yU^@`x=2/- 3yb@1,st<7H+(s#mrAU9`,l%,8+PpXw++t{8k8$D');
define('NONCE_SALT',       '2rbgOmLWZn+f$&t5!=iXvhn|MG#BRunX/7QVO0@~k#H+%VPwT6:6Wr3%=@NgYI1e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hpb_';

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
