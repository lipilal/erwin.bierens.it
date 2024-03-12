<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'erwin.bierens.it' );

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
define( 'AUTH_KEY',         'R#$nipO*tfF&doLF-)@0ArdBXKt*=.6xjE>;:J%Nrhi~1|+}wNs !&+VMnA+_BZn' );
define( 'SECURE_AUTH_KEY',  'X1fS,w/rwptOfcIT|N8tfB}&^`9B,yPy4qsFi(E[vNkZGf-Fwknfy/ySJS_4<(D9' );
define( 'LOGGED_IN_KEY',    '$E+Gk7=&FrVG7sT4@W~*z?3^(HLH9Q9ox6iy==ZvS%|^dWM!3R.9X(&i<EdC`_TN' );
define( 'NONCE_KEY',        'BuH@;#q1F4?0YlSWA%-g1TlTR.hv@+pDPWxrtgD`bUYM&o[t1wUe:~|1O|6[fy4[' );
define( 'AUTH_SALT',        'xXr08Qs?<K*e88W`z8CFA:2y[6emszms-wxCw|[]Rd<)H:>>ms<y<Lg0gmD0HNlk' );
define( 'SECURE_AUTH_SALT', 'Z~qngvr, y[M:Z.!MVr.B:Fbv^9bg# +)!e:G}1nv2iV:d~Ou=P&MTTF56y1bBsL' );
define( 'LOGGED_IN_SALT',   'q*0<u,t)xIX`cd!Ws6[t$WtMQdvekOR|B4FGgHhA7WU 95iWWp`U|ZU17D*H,:Tr' );
define( 'NONCE_SALT',       ')^M+MiB+(Wc<[>3.Y0-6ooqT]?]zb*bBDd~gy~D%CJZih&CPj:LARce880TP&:Y0' );

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
