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
define('DB_NAME', 'gutoplis_wp_2018_db');

/** MySQL database username */
define('DB_USER', 'gutoplis_gs');

/** MySQL database password */
define('DB_PASSWORD', 'demo4891');

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
define('AUTH_KEY',         '1Pvvy6twy}r{/ghN#kMbyJT[fk?-E{6PlaByvs>MW-~G@n^1l^dX-5,2:fAA}EJ%');
define('SECURE_AUTH_KEY',  'S02^b >e2zaZgL5^C2@p1#I1-9@@:%|h?]s03_^6/tdquS4tpx]N.?6Q.uaP;~dc');
define('LOGGED_IN_KEY',    'iUs0|8MZb4435h)FiwO7>0$pUhSZT%Bzge/,P,1$?p&^uhR<1&7hJzs_qE7(dI{w');
define('NONCE_KEY',        'mof/8 -$;2_n_+F:VB@`Hp<OF5gL$kh}zSly1~X>R3P]@MH/~tpyL2/=vh418BNV');
define('AUTH_SALT',        'CI;+a@(i~[KZ!6HC:(kwGqZj3u[rt yLc1xWOphJA0[5.I~[p*Aa2pUO>$5XeCiN');
define('SECURE_AUTH_SALT', '^>oy<zs2!0i]Z2_6e|n*LcM#`f6jKUXS!HrxT4I:xipChTXC 1Ii[u2L]Mi!`#fL');
define('LOGGED_IN_SALT',   ',>e])ZgX)X*gi=!oW9uuH /zk1:HYfK`ew%Vs)v,e%F}=JwwKP8 6h_$H{I[;*O;');
define('NONCE_SALT',       'oWEfjpo>l9|D{+)!)DT)N#oisGrPOW(gP;~gv(`5@isgtjuKy+#Q*&ur;u{8LJ6o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mms_';

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
