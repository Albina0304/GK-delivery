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
define( 'DB_NAME', 'gk-delivery' );

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
define( 'AUTH_KEY',         'T^K~T<LU=JFu/]D+XTm|,c{eL~&/c_ *d%i[a#Zhj+pBY:RA[8B^GH(/=`%#@l;k' );
define( 'SECURE_AUTH_KEY',  'yR$+1nuGtp%MENFu5(m)@ZrOQ5G`n<vycPzaTTThux3j!E^t*jUSc$)S((&OGc6y' );
define( 'LOGGED_IN_KEY',    '06(yi/wXH:U^6 w*q|.vF<0WY4869Sk/5qIB9qv(-_/h&x, +.qqQ}8KmrUceDY~' );
define( 'NONCE_KEY',        'V?uIt$mlVGhGdY c&11iLQZ!9Lf}Q>]IZ -X0vG<Rm|tC6k8K_,Uep& ;A.2IT06' );
define( 'AUTH_SALT',        '!hW0CWe01bbg$7Zt]s9HZXblY0-m-7p1X;DrnpRkoGoxHbkw)dr;P]yW%]{LfhC(' );
define( 'SECURE_AUTH_SALT', 'ZMT0$;}a-[+gr.Cp^JZb~MunY%,V$fO?7&%m7QQK`:CWl;Y.;xM&02E;ZfI{U-<.' );
define( 'LOGGED_IN_SALT',   'ySg9:+<{v{S-YYZ@.p^}U$s|v~;>zmRtP4ZF!IU66E|7|iY`;(7@N@xpADC=xZA@' );
define( 'NONCE_SALT',       'H8oy*yJ95}A=-`c|%UuYq2CiZMdiHLm; MZo$3<#[B<=)?kNa9AcO;!dsqv]1#Os' );

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
