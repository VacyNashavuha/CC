<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xeesigow_zolossh' );

/** Database username */
define( 'DB_USER', 'xeesigow_zolossh' );

/** Database password */
define( 'DB_PASSWORD', 'pqSX)20]32' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rzad4wf0cl6n64bjkpac4xsc7jsmk138a7t4qlamweusr1fhlnanrmq1ojki7uo9' );
define( 'SECURE_AUTH_KEY',  'hshewlwbdxkv3gqyrbxyrolp9e24zhnmb0soeoelhgkfpqbbweqlfekqijhudnft' );
define( 'LOGGED_IN_KEY',    'rgrinkg8kzuke0o20rmwpixjydecpvbxmshxhnhldij1stjrwixp27df9amb48el' );
define( 'NONCE_KEY',        'exmmzlozq1rrfdk88e27d9g3dbms0af2pwaq08fnu2mt9ruge2lfpg7kbd2htsms' );
define( 'AUTH_SALT',        'dy0yqcexpvdyfrfm3ddhn8qobk0a9gfk7xsogefa9wskpljpkygmpb8on8zyqdo8' );
define( 'SECURE_AUTH_SALT', 'ai2vcpjk7jyxalotkpwjxdazff4wj9rivdgkehykwx5qnvbk2qrs191eshs3syrg' );
define( 'LOGGED_IN_SALT',   'u8yrdj8dpg58g0akovuglaw9nlnezsjrj5zj8zvqmounvwzbznhtmtt2cfun0nga' );
define( 'NONCE_SALT',       'wkuerr8a1vrcnwzhtaiblabi5zuxwsaaemweqkpvrhcfcn6jyitob7nh4wpwujpm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpx3_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
