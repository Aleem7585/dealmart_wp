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
define('DB_NAME', 'dealmart_fahad');

/** MySQL database username */
define('DB_USER', 'dealmart_fahad');

/** MySQL database password */
define('DB_PASSWORD', 'Xf=J)%ErPN~y');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'WP_MEMORY_LIMIT', '1000M' );
set_time_limit(300);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aqeed1b8nqadaglq5o75dtt9ddnsvlc9hls4uefxqbzwwjpv3fg4yhuhfoxt7rrn');
define('SECURE_AUTH_KEY',  'equ4jdbbonpdozezutl8jxqnahpfqbzowbjl9bsro7hhwok5piea0atguwufqed0');
define('LOGGED_IN_KEY',    'lnt6m4jvwahhrhnwnvjvyzbt0z9avyuizei1ovo5riy9kqbjop0akxc5oihlu8hc');
define('NONCE_KEY',        'gapzbxjy7pkjws6qsfvdr71nziufc9vlo54rk2a1btzgs1fwakmn8quvrutuuqhp');
define('AUTH_SALT',        'jcxvfsw62gax3ikemebzbplenzjpg8vjtppawqo5kvzrfggby5ig8kwhc4rt3aly');
define('SECURE_AUTH_SALT', 'rtt5fladgbo1oubhytezyzo4tv5pmirt3tabk3rs7xw6c2knwiyohtircir7ok8k');
define('LOGGED_IN_SALT',   'qbqyib3pwgy3eeprf3cokn6lchn19nsosbzijxphwijr2oqaqg2gxagcrmm3kuvt');
define('NONCE_SALT',       'ycmmnn8nelchlcjfpysq8xwr30cwn10mrbfo6yw2ojse5bi64va7cp6c39c3dl6t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wphi_';

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
