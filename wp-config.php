<?php
define( 'WP_CACHE', true ); // Added by WP Rocket
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u248961165_5pKsz' );

/** Database username */
define( 'DB_USER', 'u248961165_4ZHc2' );

/** Database password */
define( 'DB_PASSWORD', 'P4FIgNLMcg' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@O?Zczl</yn#?tnQ2`7fr6h+b>H^2lhaH6{*kH(M=0-Ga=. *w*W(F~;+;eCQ(.^' );
define( 'SECURE_AUTH_KEY',   'a!RQS=W5!=%i|98?jTRR3&P%nqA%>yZDl+|LSt*1 )*rT9ul5T,zRww[Cu3JWQ[N' );
define( 'LOGGED_IN_KEY',     'th&Fd8|Hw sza,Zt#N2{p)TWen1u?p.D;k OFdu}; I(|(?R)9m}HjG=IE4d7r<v' );
define( 'NONCE_KEY',         'TYtwhcP;kMvY?6grf_92xT@~$*xiHH _23&RQ[^,.=ajTio$GbCACMs{ecsF>8hE' );
define( 'AUTH_SALT',         'UB9M>uWRX-Bkh%Pf#C7BPh`8:h<a~aND|,CX/zsm;V-RX?Y33@-D{nFop&}M&Af3' );
define( 'SECURE_AUTH_SALT',  'LxwRWN xOxadu&B^K&QZ,zF:#I*;b?f])K.s`y/NGzaHl[bx&#pQVEuGW$g**=e,' );
define( 'LOGGED_IN_SALT',    'ESSZA,:5p;}M|~sKiotGdv$|pRHS{W)Jj8-=Z vyuz]YlBXhp2z}Y!L%vE^?&8o]' );
define( 'NONCE_SALT',        ')~(Dm&2IUR*:^&gf(&5P.KFd#saV5_+4QhLlT`+rCe6]8#No`4uZ}dvHD2}*}iEY' );
define( 'WP_CACHE_KEY_SALT', '$*&Oy=GG[E,_-R}2qEksSxhfd9Mrx1c4%ke<FZ@0#]{rrx7.!t0c+C3A7Z/0$Q|4' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);