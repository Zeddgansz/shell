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
define( 'DB_NAME', 'wp60474' );

/** Database username */
define( 'DB_USER', 'wp60474' );

/** Database password */
define( 'DB_PASSWORD', 'Sp1]3ba@28' );

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
define( 'AUTH_KEY',         '3bouqozqfnazcblatrzxrynzbhsci8pdtyiwsbxy3soiuw4yfpvjigoyzm1bsutk' );
define( 'SECURE_AUTH_KEY',  'vsqcjvupb84q8nw6mh30xrnjqlq0gjgmeehkrcohc6nmb7ahi58tcbkx8hk1ljpo' );
define( 'LOGGED_IN_KEY',    '5nkogdzfrnrvkwa0bvtkldcdkexamokqly9aelzdxk7lcrcqnwzvqhxqfkrilfrc' );
define( 'NONCE_KEY',        'cadd5hqpirr64tjspxixswf1lblvnw7bxfbkv86lhphiwbf0xmtcmlg4kqfebjdx' );
define( 'AUTH_SALT',        'jfof7qplxr9u87yfssg5w4vhnrdpsryxajepaoobvqiro1yu5fawyx5qhxkb7aqm' );
define( 'SECURE_AUTH_SALT', 'qctfufp0dzqwwtqzynb9qt4fxrdocz67o3zl9hfqlkbje4ms2vwaojgxp56on9xu' );
define( 'LOGGED_IN_SALT',   'xay7g7qdkgdmnuxbtvkzeffxsznulalllvpkurmt3vmyerqaymkm2kcetubqv79n' );
define( 'NONCE_SALT',       'kfdt6wiqos7hkoyt9fdbgtkd0a7gueb6xlnrbggvr10zyjsgbh6grpk2aqjxobso' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqo_';

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

define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
