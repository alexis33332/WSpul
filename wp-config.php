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
define( 'DB_NAME', 'sql3516733' );

/** Database username */
define( 'DB_USER', 'sql3516733' );

/** Database password */
define( 'DB_PASSWORD', 'C3qpGvNsVG' );

/** Database hostname */
define( 'DB_HOST', 'sql3.freesqldatabase.com' );

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
define( 'AUTH_KEY',         '@]l+B1Kc4vv0_!JQWN60>E_|7k`_xqKsu5+gsw9JxYpa}Ssf?V~>W>of$ntCac[Y' );
define( 'SECURE_AUTH_KEY',  'Eq Ir9vuv!=`,9#%B@nkfkF7`.KT.v Eb2$=kF/; 5{CLA},VKwR?HOA3T@;$A,q' );
define( 'LOGGED_IN_KEY',    'jne=fAKJkw(Nz=]T<,FSpS;G#/tGj@7WI,B#ffa5=CO&6gMv`%[,`.2aw 7zPDv#' );
define( 'NONCE_KEY',        '7AsN8I0p+4BC]bY%<Yg$@b=o=3>Tq^-/v,6+9`MVq$_zLJKI?l-#t5%hpAv1[K&M' );
define( 'AUTH_SALT',        'a1[};]$!::M5[_O4&~YC;S9gyu`TWVlbQ(`1GT}k?v?<*;UYD4Kmq~!du=zdgLPL' );
define( 'SECURE_AUTH_SALT', 'J:&t[Z>_<([sihm @K_D`M73j~4CFI?t7$//@K!JhP3nr#9EXwvp.gb2Q[%i@IgN' );
define( 'LOGGED_IN_SALT',   'unIh5$5Pc#=M`i#EI++ 8>pZwb%x5Xp!dbj[f2=`UJeMS=WTIqAb8<cNK6@U/wB9' );
define( 'NONCE_SALT',       '@mt0AfKlcvo+DUqc3S*j)RWR0kE%Y(S2x43$p;wu07=6Zi,>8guL.mU^UySbU03*' );

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
