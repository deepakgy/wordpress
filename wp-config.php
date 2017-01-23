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
define('AUTH_KEY',         ' cLf*ets~{j<qoiZffTo{]$.[1azu@eP5*tGXmK8itrQVza6=8!Xv8iP=sd#OTE{');
define('SECURE_AUTH_KEY',  '?ux5{m%[$Y5mhL5fDs1:;rYr`2v~twU5o%)tR?}}i?X=hnDa??}&[,W$v]q9#(u*');
define('LOGGED_IN_KEY',    'h[NhaNb$f>d3Gc]HKW[>Xv4Mfv#nKA3 (BwB5eL`xN-~RzV(l;/Es&Qcx&POj!xe');
define('NONCE_KEY',        'h?]Jq-coK=N%Bd+wUR2w9j<@3t4f.e!4}$1e8C4Q s=.HiH/z l3KRBz~Py08B3j');
define('AUTH_SALT',        '1Ws$]y<,-fY!d!dJdk?7h-5QqyN=pC57Uqn:H=cIe6:3z27Vq(%UbUUFn5ZaF8V)');
define('SECURE_AUTH_SALT', '27Z!?/V_!_W.]|2.|CEKHg(>K,}4afh7f3?u(IFoH8iS5hw3cSJ#6ZsM~oGj8kXq');
define('LOGGED_IN_SALT',   'W@o-3/A(M|-}Y+^Wa!Wv1?G2kX3t,z=sVV;YX=ujKQuBb _Y@WGo9wvj6@XJq$j<');
define('NONCE_SALT',       '*~BUMOY7X~vb.b#g$M*/,a[&F`XF+V{Svi5SJwqd!OcyDVOU 0~mSQgahCC2ObJ(');

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
