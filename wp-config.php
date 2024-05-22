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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_ctyb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'slchLvP2T8H96SQqT6fEZnIlfYeh6lmY' );

/** Database hostname */
define( 'DB_HOST', 'dpg-cp6psm20si5c73ai8qrg-a' );

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
define( 'AUTH_KEY',         '@~T9#J[YCHx/Or)H7/LSI~23*R&+m:4gBHx@]>9b&X+}k_]!9!A7jLG4|0.c|MXm' );
define( 'SECURE_AUTH_KEY',  '0sU*rHiJnUsup9@c{69icHR>Z#Dwkewa;i/*hgha!<C@)(B3(3|zpE0u^G.SUwu[' );
define( 'LOGGED_IN_KEY',    'pZi9DS,$3$|hob%Xj4L+w9<tdhqR,YGsTrks*Iu1Ds -sziM!#/,ZJ[u/wGS35BW' );
define( 'NONCE_KEY',        '6@9A]L8.N_Z#;E>wloOGCFL3z|}&0`^[`Jgz83n~ERofj#&9!12?09/)>7yTU9D4' );
define( 'AUTH_SALT',        'g_UO,6O@)ve-;}5 =MA$7C]ikXP9qGL0k!XK!t(M;45K<NTG?-G{nmBh}<Iizzt;' );
define( 'SECURE_AUTH_SALT', 'R$Hn};Vuqc;$m+ eP+8$gbC)U>-l?Q4CW|2c2,06jjdCv7j21UUP{<=_x749J{Y[' );
define( 'LOGGED_IN_SALT',   '=f3ucy4r,@JF[/rgN#PSvD;8)FY]U7I&jCw#wN$%Gy]XP`8AX&pxqF?vakLfo3W&' );
define( 'NONCE_SALT',       'gOZ:A1J54aG_]O[(7Bse<*8D0 L}7wO|-@KnV=#ECda=c1nf`;&Ah!]zNcF)E*Pp' );

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
define('WP_HOME', 'https://tu_usuario.github.io/tu_repositorio');
define('WP_SITEURL', 'https://tu_usuario.github.io/tu_repositorio');
