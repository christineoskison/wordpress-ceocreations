<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'christine_wordpress');

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
define('AUTH_KEY',         'QieXd!3C^[644^L{J#IcCm^;$jC2k-&q~MPc9nB`1:F4eBWUbrqTryN+8*5Jh[00');
define('SECURE_AUTH_KEY',  'ZN>-ayM*d2aTd@8vwSX#)!=g28//4C~+FW)2E77_~SZ@:s]cQY7?yoj|.08<cOD~');
define('LOGGED_IN_KEY',    'IU<kQ-FG~6`hN]8oDbjST+w@c&d^`!59*(R]oee9Ap,KM5TV6b1+_#ziI=C8czY-');
define('NONCE_KEY',        '%N3!OHlvcPf;$6C9[N7`*r4RdenxG,PY]Sdbn%DG9T`#~->ubYS+7xIYJ/cpk][_');
define('AUTH_SALT',        'S8YM/auY}~C.-6RfbK}k+*drt<F/:p+3!3_4/@DPL:<va h+gH<IMpP;,.]VENo)');
define('SECURE_AUTH_SALT', '|CTgq]bit]?jcwuq-c>E;;s8;[$<lxpppn)9I|QSOn{)ZV[<|?pdWj$wuV/,p?X]');
define('LOGGED_IN_SALT',   'jVPW/39_ zidiyB=?n%0VoD<My.<{lu_:zK|*<jq%._q*?|(Tce]OO4v<<D=#UP;');
define('NONCE_SALT',       '-$EO=c%TtbL/w=|y/ML,KwpN&z|+cXrD4U_r++9h~6/(iL:$jp!U{a*M!atT^C?|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
