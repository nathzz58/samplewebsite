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
define( 'DB_NAME', 'samplewebsite' );

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
define( 'AUTH_KEY',         'J-9W--c!h)X1* !FYFQQ_1<:W,-2%vKI]b/u=6o,YzPds{K4eH`Jvs+o!W~l(#?)' );
define( 'SECURE_AUTH_KEY',  'UmP,l{}%%_hv%V(.&fI#%h+>;1n6(00GQGH_No;}16,1Vn8[NQ}Y=tL5f#<YtwzZ' );
define( 'LOGGED_IN_KEY',    'x.R0Ru$]>&lb{#1ky$Irh=m58_OQe^(9TiET_U.?YX$DP~Tzdw4MLR]zX/M48wWZ' );
define( 'NONCE_KEY',        'kxK3&&`t5xy:,onP6!;+z_B_l$XHB`!Ojbyw{)6^s[_er9zfg7Cm0[Q@Z5v!M_5d' );
define( 'AUTH_SALT',        '-E|f_?$eS(QrX6}h*f>4;Zdi4wyK~jPz]!sfP~YfHb9x(#)wIE0%.yuJ0W_cROeh' );
define( 'SECURE_AUTH_SALT', 'iN,vQ&,UM5h%RQY0M:.0=V/DUWl=0_>c(uUZID%c/F ;sN=SNc?r@~OR:4<A0HZv' );
define( 'LOGGED_IN_SALT',   't]#Ydr0x@(IBzZ#BcX8vZ9>PMvGx-}=4To}#kbUizzY/6(uw8XF>7%)qcJ+EjdUu' );
define( 'NONCE_SALT',       'K_$aJ|AeLS/Dh1.9sK?fC#.O4xuu`h4[~Ky%4El)CpA$:(*$Z*WB1xip}AGS,?Y;' );

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
