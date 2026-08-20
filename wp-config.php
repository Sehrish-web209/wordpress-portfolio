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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'rd<28lzib3=cn0ljL<`ogP::lH1zgtEfR0=N*.{<KmwH,WIu1CbM;+g1lcv1@6z/' );
define( 'SECURE_AUTH_KEY',  'RZwKnmL6lX[,#ylZToZD.3*SC&&48X^R&h>I3gkw:nr{Bm`S1?1Ehs3WY+dV(XDL' );
define( 'LOGGED_IN_KEY',    'SZtQPh&8!:?s.|2/HB*?kg=dMAs}%K%?0rWr:![2;$!v+[;KFGY?;D~QLUjp&s@9' );
define( 'NONCE_KEY',        'xIu~YP=2.Fc*o#ItqTN$YyDa&TS;qks!|:r6QW4lZ]R(Xb-4vEpXw.h!0IK5G0qf' );
define( 'AUTH_SALT',        'F<d0APPWka/Bpw9Vcl}d*K,{,*?4`P:-Z59_,ZOR|=`^%q3~5ks43U~/V6<8-P(!' );
define( 'SECURE_AUTH_SALT', '$+z7N:Onf8/qK~XUZHVuNt~nQpJvE;zFV#UK7]]i(FTT)f_DX6OMu-amNV#0lN-Y' );
define( 'LOGGED_IN_SALT',   '`UZe:lyP+n7V(e^Dx;z]&x8QPbv!!DRJDUJOPJgMm]1]mhT2a;z#X.P+{K[yIH!I' );
define( 'NONCE_SALT',       'r;]H;f=W>lf6:q&IApO>7Ms XGwiUeHa*T9:Xfm4Z<Hf0<@3}jKt21ts5p_m2NaQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
