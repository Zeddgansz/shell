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

define( 'DB_NAME', "afshind1_afshi" );


/** MySQL database username */

define( 'DB_USER', "afshind1_afshindanesh" );


/** MySQL database password */

define( 'DB_PASSWORD', "81())!0084XW" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '?NU75VsELn3`|2MuV- MHmo^n$nUNPCvpY`|3jq}m_ZTC2&n_Q`+_vRKjFr9$Df5' );

define( 'SECURE_AUTH_KEY',  '&#ud/qx&;mU5LQ=DJtZ)=*k2H[7QJid<:uWA5/cB%J`S8~hG|=_(ak(,3D}1LEh5' );

define( 'LOGGED_IN_KEY',    'q,?~2Vq/!;32@>N):HH4[hAj4nC.*Ys_J+KLy8^7+_Nk](A=U80V5-eeZ;<0m3zT' );

define( 'NONCE_KEY',        'T,w[aZqP+v#o)%-s65U6hBexJ)+#Ld@q4nLIoZw+;nt%4s)zpplff+ik~ekC5~h,' );

define( 'AUTH_SALT',        ']d~:)qur51G[]wdtp|Hiyv3Wm<uY?0rmDzc6%;rXeQath7K<U>D_W|N%T{<R+JoJ' );

define( 'SECURE_AUTH_SALT', 'tR5p6&{}lsVR8v>{b){T>S&hBYqZWPNB@pVwc:u|(Kr&Tx;b!rm8>pvS|;e89y):' );

define( 'LOGGED_IN_SALT',   ']$4dP9mF7y<7J0-mUWUfMX9tk5| ^a^PJhv/!Ij[E&9~w@UfJYJ/gop]oyvPfhAt' );

define( 'NONCE_SALT',       ';!x#48T:nPrBK-@?(p:T8IecJe[: 4}G@SRA l|Ovp-EH`=hA=eqk@kJA&e#=sxx' );


/**#@-*/
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);

/**

 * WordPress database table prefix.

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


/* Add any custom values between this line and the "stop editing" line. */




define( 'WP_SITEURL', 'https://afshindaneshi.com' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname(__FILE__) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

