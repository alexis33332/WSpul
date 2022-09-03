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
define( 'DB_NAME', 'WORDPRESS' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'N073R0835353' );

/** Database hostname */
define( 'DB_HOST', 'wordpress.c3se2l2tmm7v.us-east-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '%M%~S~420X]kEwZh*:s$LCccu [Za-4gNG}UkF }}`<Ws`j`#Hz4@Ur.%x.jp~7{' );
define( 'SECURE_AUTH_KEY',  '/m>FvAD?Luo_-vT(,8|^|m[30#f;zdk[6&M^gXm}R!^y$,(J#b5o{vcZfWBs^<D@' );
define( 'LOGGED_IN_KEY',    'qKk+TFe1.O;{ptUTv7U5GG/nqUX0JW37y_,V8a.oBdzj3wl1CP+I3$Hib7m?K!HG' );
define( 'NONCE_KEY',        'cA~;hTvU5QXUW>,ptG8R+eA&2>IoRN*tM)|Q>!0k9&^ReWZY}Jx5T}~r N(Vz7YS' );
define( 'AUTH_SALT',        'DwbarffNSFQtHdg?uzCe$B=|-,ms~X7zzN0][5S}CRd:MFUcl^I5I@,k>Qi/DTjj' );
define( 'SECURE_AUTH_SALT', 'ePHo.wT5`]R=E74}g!&+d|*,7x9=wSz!q0#s@wd-,kn]c%#Q9mI0fX+u@|4F O_S' );
define( 'LOGGED_IN_SALT',   'Agd}gXlyHhZ&BiiQH0Sa~opxb.@m+n<uS|8gMQ(w&x (zm}AF pM[hEYJP`Q4]42' );
define( 'NONCE_SALT',       '@(hIJD(-}7p,b(WI7|I(m_!FH|#0,5B(#,4+KrV.TOOWbRD}8*<foD 2Ze%h.0;v' );

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
