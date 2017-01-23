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
define('DB_PASSWORD', 'deepak');

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
define('AUTH_KEY',         'N#Jv`__#ZaVVfv_/O_,% )4n.``{jtR,$X]Ux4/z^X`?=pC<`fM:yJR@U<Do)3)l');
define('SECURE_AUTH_KEY',  '(XC;Lt+;t;@Q|wLf-{90W}sz3[_[8L)AZaR3an9d P&xg.R*R&;>Euv`9#k]Q-_E');
define('LOGGED_IN_KEY',    'a[</4gGr(/:PtHK _(0v]sMS&{vcEX|_0^h*@<APZH,zzBu{YnI1jlA[U=[PTGSm');
define('NONCE_KEY',        '+&qe~ZKsl6C:y43Rn{lRj$.f~!,BD7?;5wz.>@OK1YgO*{ f.N^1b@%RoU{_FnA^');
define('AUTH_SALT',        'bq-{BK`KR75$]*9@fmp1yqdakFkzcO])3Z]~QV0)1dAtD}5&xdevO*DuYOb0abG~');
define('SECURE_AUTH_SALT', '3KT.uDjgCDN?YH`)&H-*9vo8HpMs}V}xCG2?#b&0MwHU-^44Qo=pcGrn7c/|[OnM');
define('LOGGED_IN_SALT',   '#>vEYQ2%9W=TqSl7)206rj8C&<Fjfx3L3?S>Q% *z2/++!=Bu.aDTdTATfZpf(F}');
define('NONCE_SALT',       'epY/ae]qqV/#oqj*MW}Pm]KEDIK;(Ygh3oHSFF~_OPept{CFclR05<I>Qwk[(~5-');

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