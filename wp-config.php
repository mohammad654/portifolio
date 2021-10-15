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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'fhDeoXiOYZg<?Jz4h_N8QR6D)RJ&Fo-ZmI|dq8Hc]Q6]C|jZ0p0aA(`c<.9tq=x)' );
define( 'SECURE_AUTH_KEY',  '.T_~0 ,@4s.k.&H`co~UqF/k^HwN7*+e8)44:-~(8Yg[%R^$Zz-)d{,QIt6eS*J7' );
define( 'LOGGED_IN_KEY',    'FYg&!moHyFeC3BG}c0}<d]&L=9Hsp%!N3`On=p1_w{ZH6b#M{oxzj.Q_&}BVJ0n{' );
define( 'NONCE_KEY',        '&f[.T|b] +qk{4I6uyW=rC~KQ_Q1#@F$%Mx_&k/i788=,Q)46#oY;?D0k5P=RAG%' );
define( 'AUTH_SALT',        ' i0z=g/@Gnn#A]^*Pl| r&/i9X;LP]@5<{9ICJow=;doUI9gK=sHu x2#]X:t?Hp' );
define( 'SECURE_AUTH_SALT', ')Z+SaqY_{Bq#!wm$M>qqK~.zX_aC$%qqrQu]yNbsSOY[s$l3`VIj[xc#4/j#e?xu' );
define( 'LOGGED_IN_SALT',   'h}iLE_TKY!kN}pYPyhmud2-[L},YVi`]>[L6DWWn333oqsrR|qu[4]_35CJH^_1x' );
define( 'NONCE_SALT',       '|;vE3x!cQz%<u7{Ubps]gqL?/WX~]e>VZ,%[X0^/c~Z[AUy=,&8 _[W(HO:;6X7d' );

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
