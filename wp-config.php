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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'designpro' );

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
define( 'AUTH_KEY',         'pI4wPD*${5o@2DblKnmUkI5q-m{$9JYEJO#zJ@O5h3hHVZRc#),0QA/!wF-P^/3 ' );
define( 'SECURE_AUTH_KEY',  '$ZZblM@odXvK?,J!oAxLd.~okO[;:g0+^aNyD~dhU0FG7^IE;8#e?`G]1:L9X#Lq' );
define( 'LOGGED_IN_KEY',    'mI7QjL@5y+a$ EjVh H!IayoH/dH(dmIMP$i!zg8g7{rL0mN+twC+/vT6,#5c_Kj' );
define( 'NONCE_KEY',        'n;w=U86QCB?_ 3$F9GDI@yu];qenTA!^V}I}(Hj,a}2*`=M!UobK>9SQrDH`Y vz' );
define( 'AUTH_SALT',        'W2}T;y&2w:!Ufe}QJ9 8w57n,`^<|xxw nDAn!H4D/N/!<|%C39fdchIB<(EYU8(' );
define( 'SECURE_AUTH_SALT', '+)yyeCH<zW2yI+3n%Vn`0Fp)S=)-7RbI:5*Dw?[wKv7-^*6dwghNG{+:qU2@-wHo' );
define( 'LOGGED_IN_SALT',   'TK%M!G=>fJ,-3r5J,3m8{!(%u+<7e>opZ{;iHOCL+c/3AV;})#9IT87r#=f($;,G' );
define( 'NONCE_SALT',       ':ds&wq)ZQ~-!}M7=xx<;sHV~x^h5v`!E&>VY9>r*?BnH(Yn@fi{3(3 E:4&MGL<X' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
