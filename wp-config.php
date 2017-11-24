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
define('DB_NAME', 'scully_rocks');

/** MySQL database username */
define('DB_USER', 'scullyrocks');

/** MySQL database password */
define('DB_PASSWORD', 'X-N2YJ3!');

/** MySQL hostname */
define('DB_HOST', 'mysql.scully.rocks');

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
define('AUTH_KEY',         'n(qGlq3tWxbt:YCQH36HC|;Vnn2Qwly@y4!`p76Uq#xOc%jX$TLY2&;|Z;m$R4LE');
define('SECURE_AUTH_KEY',  'Pvc2%EdF:SAaSHME`miWzR1ba45`0d|8iNt^Q79|c9oMoUc_E|Mb0f$3?y9HS/wP');
define('LOGGED_IN_KEY',    'D8xHwdQ%EiATwHFk$Fay|cFR)3P(K$lmQ@6yLrHtGm1j7lARrYVQ"H;|5v1eLdy+');
define('NONCE_KEY',        'nwe~F2r8n2lhZt7YZ)q/bAUwkPU)f/F&9H!FS3k@o#3|APBDqu_2arFsBLr*DP5I');
define('AUTH_SALT',        'BFNF_fkEDVy6Xe(_PzZ!|9XyS(%$Vm0;1fd`/0AeWnzGTqSvs&g|mBln_qKG6uI4');
define('SECURE_AUTH_SALT', 'nIzQ3oZV6N2m+VAcMt$uB8sgij2qFI_t_CyEfO@E!J)ngb6k2B8Xg9r__ZmbGyd&');
define('LOGGED_IN_SALT',   '&v9O!eE6Kr^5;vJ$se$MoebKq7@)uO|#QTky+9i"*Fv2QgEy~5t+uj3uQJs+ASdo');
define('NONCE_SALT',       'svNinkQCuBNmup/rl7`oYx`I_Gr|RYBd46keW;;NiDImfG7SzQJae$OqSUDOzIO*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_m3viqi_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

