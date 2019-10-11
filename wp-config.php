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
define('DB_NAME', 'avfacili_db');

/** MySQL database username */
define('DB_USER', 'avfacili_db');

/** MySQL database password */
define('DB_PASSWORD', '6g_is5[wis}m');

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
define('AUTH_KEY',         'EeLKLhtO2tO50yNu2JFNwSXd92VVgjOcKsO40dDYNu7UHzCr0ZxvBD2NuNbeY1Ft');
define('SECURE_AUTH_KEY',  'oPzONcuzDuFpbyiVeT2jss69XJkfaxj0YurPY8DAGzz6si8mdWPgkcsFFHnoJ62g');
define('LOGGED_IN_KEY',    'ViYcu7gJw9uv2ur0qLvX8rhReeC1KGPBigvEif8QIPJrR9wEUUpEDN6Rjx9zol6c');
define('NONCE_KEY',        'aHEh72tGrw0vuQmgyNpVGtAg3WJlVk9NmQoCkpps0TCRM2syHPEAeSmUwpCG2XKd');
define('AUTH_SALT',        'bZD4h8e45gvlcHl3FSadIxOOFBTV4C74xbLmMXubuGfmsJ16Mi8ckZLpOkEPcBnf');
define('SECURE_AUTH_SALT', 'Gh8kicQNq2c5RjpCwwZrEaH63MtxcZCAwj4SyPEQgckcQ8fPO8WB3qyuf8PtzEKt');
define('LOGGED_IN_SALT',   'PG4Lg8ctC0CMvBjPlGfUiyZRYSZSMNGvkEx5kuPosJJboQVb5IhQyozV9lYEfZIo');
define('NONCE_SALT',       'CKX2VwPFvE4mN7M6fybvI1i37avLtpe6t35jL8ZQoaAPtuqVt3orT8EZeUWGnQEU');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpma_';

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
