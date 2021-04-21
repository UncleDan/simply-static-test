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
define( 'DB_NAME', 'simply-static-test' );

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
define( 'AUTH_KEY',         'yTyQWsgNs81qvnhod1WAYVv2cFSJCdttkRO4m7qAq86Y88FkOkPm12EHMqUHGoqs' );
define( 'SECURE_AUTH_KEY',  'AiYR277F90zXHp59z9zftCc0VCIYF8l839XaAzQv4BqdNUY1QMQYpQVoB8wZptli' );
define( 'LOGGED_IN_KEY',    '2VVwwrUxNHE0fhq2nxHScII2tYIc8awYUbetibA8DhSBybDp46xzvM9nLAlg7OVc' );
define( 'NONCE_KEY',        'y3TpdJg3DdV98OtMwatCmqZswJ5aVPH12H9kcDU7e3THzJUa6WbAkOopFm3UQkFZ' );
define( 'AUTH_SALT',        'ejzDUgOBI207QqHFVO2dfvdbpbk2ZvdFcD3L5LcGPzvEF8zwO45YIE7dNiOv2skV' );
define( 'SECURE_AUTH_SALT', '0oDmnjhDbq9eXAzUtjrnaIyTsA4WeAppgYnPIuQ8rBLCGRnI67vGt2DvDfWDZDHf' );
define( 'LOGGED_IN_SALT',   'frKwgfNVYKtWG4PTKgbMX0qJvOskcTBvOdVYJPDh5N91bbqDZfPfIzhVWOMv7aol' );
define( 'NONCE_SALT',       'CXWiI1U8e1l2lucv4RUv6sBh4gSVf2N85PjLiDbwJcdwsomDk3Y60o9wtgbunbz7' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
