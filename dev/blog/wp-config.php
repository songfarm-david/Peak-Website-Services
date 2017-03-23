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
define('DB_NAME', 'peakwebs_pkblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'hjseamxirdhzxobnmh2ggdz9yrruzognmyacaumrsyqynslki7l5bn9la5fx8us1');
define('SECURE_AUTH_KEY',  'uopljcpblorxgrhk8mxqce8fzrsnnzzyle4zhgedau0bzgem5hjj4rs1tsqld6kx');
define('LOGGED_IN_KEY',    'vqsei0cftzit8kq27hgjjgp9ysmhmu3ovgpa5giftefvuibks1kbwjdbopyskq2k');
define('NONCE_KEY',        'qwhjv6eayuu5ha2ntvlwrzq2im0de6lyhrfsialyhtirz6oointauzmggsdovhk9');
define('AUTH_SALT',        'p0infviaghsfiujibxgmutyxkvh4nuoyoceioenqztfyyedlg2tjboj8uwhjhm2e');
define('SECURE_AUTH_SALT', 'pe5oqrgdj5ma5mf10om9yk3fn1i4xrmfcmqukwummvotqbnjj7vuntj6vkr8kxt5');
define('LOGGED_IN_SALT',   'b3cgtywya3bljf4bvicpl65t9ruhvjkytfu09q2ipxyltkzz0dvtrgwkrkhytck2');
define('NONCE_SALT',       'ebzylqc0pmyxegi2akyfphhsgimbayzwwwng6crqqanlw6lq9dxlqk1h29ct0luy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pk_';

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
