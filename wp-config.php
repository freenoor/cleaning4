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
define( 'DB_NAME', 'Cleaning4' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RgZJbdfesTfsqWorMOKoCcHcRxHhostqoaE4hTgRg5aTbJissjAo54LL9ooM9eTw' );
define( 'SECURE_AUTH_KEY',  '6O3tMh4novQX5upE3K995910Jl5Y7jVwmeFfjLu3GK0iMsCs30TJlBLW8BQJMYqr' );
define( 'LOGGED_IN_KEY',    'd0yrh0r0wv1cVaqik5J5kuCsBkhq1lq97qUo51jreRoYn5wFSY7zjU5mPLt7A695' );
define( 'NONCE_KEY',        'VBN17cTIxWVzs1sTV6IxjyVRDOmg1KxU3fsNoTgyBswFSNWDwnoP5jmwDCpDyw7j' );
define( 'AUTH_SALT',        'Uw6bu6Xa2jniWOB7zLGkBuwXavuk6ZFdHrRQgfXLZglu9pfHBrvm4XQQEmUhHtxc' );
define( 'SECURE_AUTH_SALT', 'WgJriBQQzkdCbPYWFQcu3iHUSmoYDqreM8rqwyQ6nqGTOMrRClgnVY2xVy3Iw0mJ' );
define( 'LOGGED_IN_SALT',   'ZQJLuMAJbZsxc5Apdkh2CZtJJl5cC4UYghfvbMUwMXxRUUv0z7GRJmTAqaMV3xzT' );
define( 'NONCE_SALT',       'eoLv5QoS7B43QCABtgFL6UMGB9rTkVm6elgHdE0GbCwguEPa0WYbZUSLpnfTGh7O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
