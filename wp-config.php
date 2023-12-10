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
define( 'DB_NAME', 'kafu_task' );

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
define( 'AUTH_KEY',         'KXj1f9up%5eZCJl3wZ=bgVQkr]=D}cX{CKiBlqxzR8;CNZcMgq^a_Px0WvY{baT3' );
define( 'SECURE_AUTH_KEY',  ',K+#,[4,b}/xz!;W1Hy_&:0{vvAe25ziPxrj]oX{>^)J7EN %S42FEEZH=nug&i|' );
define( 'LOGGED_IN_KEY',    'K~H2;F1U~#!OXsM`R@U?1c^vyB(P~, [USURagTqiY+%B|&Rl| HLw&T4C1AsUO!' );
define( 'NONCE_KEY',        '[auUcN_wj:&nc0$>(pmhDtA{+v8t_p)B~hfr!|wx(L[|I7@wz2Mg]fq -=mXJGGE' );
define( 'AUTH_SALT',        '7]tiz.mQ8ZK>-S)&{m*_U+<FEc.<yx[~K(T%rqpRj:Xg It{PO<sc.kGBJ+@b)~|' );
define( 'SECURE_AUTH_SALT', 'jm1F-<YJr<%%Sx,>^]N#]I7c{!^x`qpy6eUPWjM,-rITl&{+j7`M;y}oZ%Om}THi' );
define( 'LOGGED_IN_SALT',   '8(h63sY1ynh65Xwgv>7)?o`?,}SF#V4&Z2$vkS)/tN(Y<?LPlJN8=/e4xz9}%jJ%' );
define( 'NONCE_SALT',       'oV|TID|s)a9Xsq4Nhm8r4B;r}2=~Hb*E#hn5@SpxsI!G)hHGcni^~g;d>g~I_BaU' );

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
