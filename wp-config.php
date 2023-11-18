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
define( 'DB_NAME', 'tryart' );

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
define( 'AUTH_KEY',         'B%(KO<g,[8(n}lY;YsGf.h09z#xqa|1Ie:Y#d;T)Vd6|o+HNV??&e&d>m/K$LS_M' );
define( 'SECURE_AUTH_KEY',  'qB`w9}]S,]g$j Ljwt:M`yUEbf{$`*CPTp8En`b:[#Jx.xhn*@hMKJ:RO-|Zb3+;' );
define( 'LOGGED_IN_KEY',    'r8k~kZk&cB~Z4oiO_94/@bOvK3ui5WDU[3]T(0M_7]x}G-~A)i5YfNSR^Xi*;rpF' );
define( 'NONCE_KEY',        '&x0kJ2^OhT*{=t)?Y@GV={4dZ^0%_-BXqUbF#4yO1[C#R+>mE~olKMN`17_EL29-' );
define( 'AUTH_SALT',        '|#r92[f@oAwk5FWIr)X^%3VCqUX/NDBrD%MP;BQe7p5J@-zgTY9QqJK;R-56<CLE' );
define( 'SECURE_AUTH_SALT', 'PR~Fp7>h,0OnW9tPO}NTT)vY4ZblK.6h#|?gDo21F[/lD-Kdre9>h$KaIpTXvj)!' );
define( 'LOGGED_IN_SALT',   'PI.l|Wz@Z9?Y_><?.l=0 XgNEz7t%4_W-@Nqf^d7,shQ1#;`WxGCnnPI8_+Mj93q' );
define( 'NONCE_SALT',       'e-VUZc4vP_jnFBgW&W4nRNG>N#/D|!?jjpOi9!&e)]}&<@4yPH8EG>9%J9.g dO3' );

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
