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
define( 'DB_NAME', 'ecomerce_website' );

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
define( 'AUTH_KEY',         'qC2v?1XEdJw_}S_4,@kr)~ 8ZoE*bXx&hT6+ki+s<}.Dh}OIFNRv+)7s$^C_fmzP' );
define( 'SECURE_AUTH_KEY',  'R7a]hG=O}/,%xs&KOwq(pdR9W#roa5/wn+~;?HG-f1@GhW=X$-_w]b#{z4~ 4Jj{' );
define( 'LOGGED_IN_KEY',    '3[kLf/c=[#XS>nWc3CBZpU/cYHW%Id=O^sVUkYcx^C;)ECKlu!iJyA W<GL&q.gV' );
define( 'NONCE_KEY',        'qlYsH5r]flp8=p%)z;IS1H?wP@c%^i$E;K}BK,X-3*{$?R AtIk;bA]vV;-u48X#' );
define( 'AUTH_SALT',        'L0KdBr7`?C]FkwqFJ07YOdOgFC|~Bps-l9|AZ 7lPFcDxH6Po6bbVk7s(NC{C87P' );
define( 'SECURE_AUTH_SALT', '@T^WQPi/R/iF%Z#Tz}?o=Tp*V`4`BbJQJnYFaE2{Hd< r?dH{$~0[)!h+ $k|J5b' );
define( 'LOGGED_IN_SALT',   'ij aA%HNk42N69y:z6*$Q`iqBO4o9 o_c7aHwe0/D<;E>%?y/t4I=u0Xb)BBZu<U' );
define( 'NONCE_SALT',       'Y^NcU`T*,bh5d|g)&Od[tl4C~?[$U`g$I)U2~uZZ}f(:.IQ)6~DE+_AJX?~23=<3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ecomerce_';

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
