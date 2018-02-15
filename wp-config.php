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
define('AUTH_KEY',         'eJL4DmxNyP:*ftKq)amu[I- AHuESv[2zzno,c=rHPsl+::Mewxm&_c5.#~[7_]I');
define('SECURE_AUTH_KEY',  ':ykVK|xCZC;d.c+_%:v4)WKU*v#KtJTKb*7e:6zoHpdjQ-0E^)h+{$Di+h_pc~a+');
define('LOGGED_IN_KEY',    'JA]95v:Os9MZf=W*3cS:[2i4X)K-bkebg- Z[>!3QXI$I7~7~s*L14d@{!UxIsOf');
define('NONCE_KEY',        'aw7$N^89wnH]C%F7qxd{*sZBf=D6G6n.S11<9`ueIX`)+tEWV,<txs><QLj=>h,!');
define('AUTH_SALT',        '3D5#/J .wDC :W^6*mT@a)WaT|=;dpWW{eCKI!bY-gT<^q|37H.236>/y<G oHN&');
define('SECURE_AUTH_SALT', '&4&Y.qP5A}&ijBQ%N&b0^#|sT$_dz#[uPC~vy^mL&RqIJP+QCDG%D-K&uf6FZ:{8');
define('LOGGED_IN_SALT',   'c,Zxf:2S-urO6#//hb3lS2iY@l0`^IH:=p8jx:<K~sQ7R*y5v{/M.lHmWh6>KxTl');
define('NONCE_SALT',       'KnmPqQbewSZl~M8#.$7vQ{W#CSb}W-:P8a:?R%9CNd{wa$@u^ms+rD]!4&I<ICg{');

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
