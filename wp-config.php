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
define( 'DB_NAME', 'ipcn-institucional-2023' );

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
define( 'AUTH_KEY',         '?m_&(o#&$xk5v AN}GfPM=hL!zO3H`1<[}(_o8A 3}Y]4xB=~I u0#%*p]]?kDAH' );
define( 'SECURE_AUTH_KEY',  'Gb@z]>Q&BT;(&67FtrxwVif]^@=nxwtjNlo6JWCm4qG=DT:L)i^_rZCK1`J?Q~X&' );
define( 'LOGGED_IN_KEY',    'XlU*JYRZ%$pgb2;/H0C@2YDjCPQ:DevB{l?~x^uE_$Sh+*&14:1/5RLufO1Z|&_M' );
define( 'NONCE_KEY',        '/?&y~9Rzp#x].X:[Hhxsb7APm+e>3Cs7WkpelM6a_#8~ct`v}NGe=U+tt~E<pb-~' );
define( 'AUTH_SALT',        'T!YK`.#|nEj<?1s&TSHwAjTwV(|}_40vL09R]e4dtWxqr(q0Dvj+80S^d]%&(3M_' );
define( 'SECURE_AUTH_SALT', 'mc;A-kq>Oz+H~p&_?2 IQv*`@X+X.03x}NoRD:[(0H6/24UStD>S@3*A%q~jhyQY' );
define( 'LOGGED_IN_SALT',   '#xc<g&&M4c><>0jF(TB+npp63&!1d52L+bO9C4?_GmY`<6OkjpGMPXO:G%Y%$;/h' );
define( 'NONCE_SALT',       'V(R8:cM%78o&-Zn}.U4=t8d(dlSad*rB)zVDWj1n-`TNm-&S)bvT>/=^3|q`P#V*' );

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
