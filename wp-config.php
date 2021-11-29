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
define( 'DB_NAME', 'obdcpbfl_wp679' );

/** MySQL database username */
define( 'DB_USER', 'obdcpbfl_wp679' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Spqr75)!r8' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'h62rhohtxxzjf253ttcfhdchwlsatmzrhbmcpq2weyyq6uuc3g1p0xt1ia7x76nn' );
define( 'SECURE_AUTH_KEY',  'elzpfdbtnl7sycannamswepsni574somvxhvag7fpxhgpkzmreckqfw0ypbfj0wp' );
define( 'LOGGED_IN_KEY',    'asfa2mcsd018wf9kjjwrizyxnlvryjevx0dvpprblivmpy4qx6nir6ubjnaixdpo' );
define( 'NONCE_KEY',        '2kv0hjn1ivhwllvukzvygvm951c8wsc0x6sqsqsz73poxeilx1kznqqapgzipuki' );
define( 'AUTH_SALT',        'emlqv2thspkrqj6ioy9fqgr8k1d9qmcxdv7q1ivmdc7mwnlyyslrnkyp3yd5xaox' );
define( 'SECURE_AUTH_SALT', 'hvn34hyse6pekwd0z00pq0eoegvqwachzvigzmpscaoupyemqylt6wvcvdoh1blv' );
define( 'LOGGED_IN_SALT',   'bcpzcwoobz6fuwqtopcxyj01myystdebp1xa3b05j9gty5ef9i8lfeyd6vlhjeuz' );
define( 'NONCE_SALT',       'wievasg8ruspqni2nprb9u1zwvagi7cfssxemvuvtpxnrjaxiqn0knkxkfzoopvn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mgw_';

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
