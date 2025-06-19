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
define( 'DB_NAME', 'thinknest' );

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
define( 'AUTH_KEY',         ':bIjx9l|ot^eZoRPh^wZz/4#JTs(!%!t_HBb(P% ;3bc+sLnnozvo^ju:{N;=Zse' );
define( 'SECURE_AUTH_KEY',  'l{&B0w_y]fB5;%p7wP_VtZOYLs(A T`D[5bT]f-L>hMUH){Z`_I-+%eVc<tX }}[' );
define( 'LOGGED_IN_KEY',    ':Nh,NiaKcNVOVJw07+L#ik:{i]Rpka+CH/oyQTFygx!a{9K[9*cg1xGfk)6+9!0R' );
define( 'NONCE_KEY',        '_I^!MG;Qlk=@rIpZf.3+0.d*M}zj9BnPnv>bWQm<K:B6z*<YrQ.sSF;V&v-bA6[w' );
define( 'AUTH_SALT',        'QlYZw^iHl*NM$p~1g.LJi5+g7N%7#luMK^+QtRC+N4uj2@lw]8QM`^)z0Gj~]ck:' );
define( 'SECURE_AUTH_SALT', 'p}h20wwrdAo>6BS^CKpXDOIZgbWr*,{~i:))#q_=90+oN`1sM>_G-fu!znnog:C6' );
define( 'LOGGED_IN_SALT',   'q[o4?YlvNvun@4gw`iXqqbH&IL<%{`&nI,<MMO`/MHJD3GEvIxZD739>H$bCV,|j' );
define( 'NONCE_SALT',       'yt)b8R6ZW)pg=>[oEH55Hs@l2n-|>uL)YuXb&tv#zed,NqMtQ{/SIk@Rn/I.FUB(' );

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
