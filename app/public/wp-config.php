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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ky+bpKC2u95mtZLsWP6FqwaWw+qsfSoNZ9XbFRcVhwik8pG4fxm7FFpg/dSdqWzV++ZE3AJwy+OVuUDqHrVZLA==');
define('SECURE_AUTH_KEY',  'Y9OVdjMa3hOkAhhXPHiy7Dn7TaoSYhbG3DWRAuoBvMo2enLeaQpYb53ULoqacq57ODuCPrcXSZrJZxS2HW4kig==');
define('LOGGED_IN_KEY',    '8BZkVOHDEewjuvWVI4QKWXTdfWDMhlGKYbrE+FiPnfZW7jW+NxIIzjaBTZs0xy4FAEv26yh5uInK/18m/fJ+Ew==');
define('NONCE_KEY',        'm5SHhU6NAbBY/bDTJJgFf0IfDr3+qeavymJsi8SOenjLN73z5e9157/opQkg6zSDHAVCfYZqQ1K5tCJTbBFUrg==');
define('AUTH_SALT',        'ARAGRjds9tYXsD8VLn/9wjtewSRTGQfJKhz5KZ5MXeqboVVcdA9TmzD06Es1pPuzUlQ2G7ze77IY0iMzh9ablA==');
define('SECURE_AUTH_SALT', 'GuylYKOhMSZOvvVbj33zfV3fpy/EvuSMDWAXjv5zVXCQBiFghMlNDmtjs+Hfrs8sd0CSexr0kek58mLdXwc/kg==');
define('LOGGED_IN_SALT',   'WvcMLonPTySgdjSVuJjwjUnSkgIeveqyxtYdf6MEEQaTUsEIoD2AtSk5aKW+jeMopjYW+/p+EoWlRZLRlKW5xw==');
define('NONCE_SALT',       'Yta3K66SOPo5bUz/ZTnGJWb2gqEOzDm5pUAD2GxKF9nPQYffmDePYmnlm8xZHaUlUPosPQfUoZa3tmwpWjBmqA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
