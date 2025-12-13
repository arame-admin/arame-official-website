<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arame_global_web_v1' );

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
define( 'AUTH_KEY',         'q{_@1(ky+ssJ*_d:oBEI@xsnZf{t$2*hvO5oO$M* #[%@FkFX*E:&<JS%,FN{aIY' );
define( 'SECURE_AUTH_KEY',  '8|p (5xBw4OE.OWuLnP?vDH%&W`3~=fT1IHV_n>:(/$cHzB&itq$?Lq6:-7TS%(.' );
define( 'LOGGED_IN_KEY',    'TQ.J:Xg n+^}Y 4jX$OT2T77OAo4YvE$z),N`B@p.Kq=rO|<q4h(coUI=>lTu%S!' );
define( 'NONCE_KEY',        'O=N4O<3oFS T^cbslyzovqw=izMu=,4dP.&zAd]8JYkg7c.A yx!xC J]q~p9#.3' );
define( 'AUTH_SALT',        '+8QQ1.ct;7kDLU6_pvQZ[^I&TSv|,b5sJZ@71o4}eYZ FNe`S:0ED`u$1@c_.c&|' );
define( 'SECURE_AUTH_SALT', '#@^uhx%?EnV9uI71>Lv-$;;.=`OTcq7a,{y7`F+f^oqVIxYZ7Vr0(bfGq[1eUU b' );
define( 'LOGGED_IN_SALT',   '6J0~L9z!@4T6C9r: e3jqc*#8Ce=5X_6j9lXFoHOuaX$w$:Rt6:HcJ%3-u0OC:@z' );
define( 'NONCE_SALT',       'ZzDZ+)LhSb?/iAkw&^U&vW$_.b>+~F=X($qP~=8{v1ncz>Y$%WjIC(<iu[V!8Pd*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
