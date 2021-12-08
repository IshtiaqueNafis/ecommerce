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
define('AUTH_KEY',         'KePEcqK3vC1h88jvWz7i64dNfBzIcLczTEGK8uCwS3EFo7fcs8gTBU1D+egoadsu45xaKnRpGkFSYh/41qIrfw==');
define('SECURE_AUTH_KEY',  'Xkh8PcWogCTEYfkkXaxlmNNKjEe1qMm/OOSqjWytzhWfO190sqyXyszEZEWW9Plx8iJKZDVysz+6MS9V1ZCRaw==');
define('LOGGED_IN_KEY',    'GJm4S0RkxWOIwSw8C3EX2Bz2mB+rhAaJPtoKGzgECtTl53LBcLZdHT08i0PNGuU/3HnolWjjSUkiuDSZvfjGFw==');
define('NONCE_KEY',        'K0QNgLxEmcjwRb6cwA/Ia2V69aWgYawq8B7jj5GTjKXmfQG9JSxYyZ5+7ydlvTaUQeTbYPTW6wTFk2/cVqhxEQ==');
define('AUTH_SALT',        'HIxYJTtK8VVWYnlvrS7OWM/v+xmoVeVf5iXM0AwnE/nVMYe+MEy4pRWyWSm1VMMjGhk1boTyaHM2v7o6iwoTsQ==');
define('SECURE_AUTH_SALT', 'LL9/aozew5+cX0DpF3fPMFwP6ZIzDPdRYNzybK+5XBDAZiawRyqpwHjf+0Xug8SyeCbyCewO661aNUuU2CNydg==');
define('LOGGED_IN_SALT',   'a6N92deYoYfaBafuLUiJ438ffUgKgOmKX4D6A7GcZDSPBFp5NPLQa8Y1uCgUn+HSYyNJVb142wY0M0PO0IAgWg==');
define('NONCE_SALT',       'oujytL/V3b+64YfGnZ0YkIQj1WumtoZEix6iIveMtyU0K9rQP38YTBFhblpiaHfYDxFvTLoKoORSX8AvsyEOMg==');

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
