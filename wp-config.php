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
define( 'DB_NAME', 'ivanis' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'U0ihYy^5UHk~<2HVN+4;k/PYPQvuuWs{&4>Tkh&s(>Z3` wbeW(.y8r1z_^:}t&&' );
define( 'SECURE_AUTH_KEY',  '?9nN;kQx@KyU?4A5iRbeWq>k ?bd}ICc+5CtjnP,Uh9Vqk:FcJ(oupvz76VOkreV' );
define( 'LOGGED_IN_KEY',    'wilPTKL(f*]^Dza@a- )|%GZkK}$Lc]l?eUl~(fD(yJ[z/0I#epk$MI;d~hv0KLF' );
define( 'NONCE_KEY',        'mA/M]i]]yL; XxVxp_}RvZ$58X&l#C^}bE9dBr YRWj/>yQq@@/>?z=gt;]]hyM8' );
define( 'AUTH_SALT',        '(;++Kq8)zTeUKY/6Y$3LMkGZ[=J-8rjSef3bP6cLKwT}`6WW:JJ=9Jm(QtM%)`Pq' );
define( 'SECURE_AUTH_SALT', 'eidgKI-7#|to+7,lvlHXzw9)v1)~fe3?ETS:8zspCuJOo6?^{KD2qFB~u9lr>avu' );
define( 'LOGGED_IN_SALT',   '@ ! ?DK?X1iK5Y6~5fMbaH63.{Ulu][/GJ5%Jn]](Xz[44Z!&d]F.,SZ4c4n^?zB' );
define( 'NONCE_SALT',       'BrT@b%z?_8o8S=.98_O#9&u??oZ0NykpfPCe@5k`D:f9D538 r#+}pE79/D4RC}s' );

/**#@-*/

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
