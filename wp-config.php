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
define( 'DB_NAME', 'word3' );

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
define( 'AUTH_KEY',         'MM#p7qB066$aNN-E}>BtQY{6V++Qh?$S:`9l>FL|[1Gb<j&)JCO!,Za3m&3b6kZ1' );
define( 'SECURE_AUTH_KEY',  'xSZoE&8msy&7T0@*26eMRlK}48HO7%w4l7Rx=81W?05_zi/j8&3J!1Q+1bTZo53Q' );
define( 'LOGGED_IN_KEY',    '?Saj8&?BzQUTmsH16v9*PU8rwg%e(SE3B~^;ES!X/*oa>k/X@I/ F5|- K>p/m8?' );
define( 'NONCE_KEY',        '0{y_bu/2>2wcD*!Q@|aij~2P@3146ki-wKF-~B1l1v(PF]-!1O1X5QdS&X&xAoCE' );
define( 'AUTH_SALT',        'crh+vS6SWtSCUYM !7UbnIOJ sj5WF=5*mF]JdMPRAw#ClsX+VZU?ol`[X@M7J~{' );
define( 'SECURE_AUTH_SALT', 'l|;xZQI:PJ12)g].3h4`z_I75!#reJZP|ku#E?]z :bBjcCv(iLj9dpzV7GUre5n' );
define( 'LOGGED_IN_SALT',   '3SR!H]*)>-yIGm@WIwMAv; U<+e1w@<g:g*Xw46P~R<FOnWw,ay#a~do.N;}WUS{' );
define( 'NONCE_SALT',       'w4W=Qo81J)wDzL_9_kv1P?k>MpQ89s`w&TZfd2l%+=vy1#getxC:&;Etn*,PT/k4' );

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
