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
define( 'DB_NAME', 'wpcovid' );

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
define( 'AUTH_KEY',         'iJqjOCC]SE&ySC7W+?_n/__<JK+FU&Q55qiqd{_izV{r7ZYq)T*z)d6F^by)qpOD' );
define( 'SECURE_AUTH_KEY',  ';F@]Fj&NUp/=}`?^1]Vwa2XWDdrnoTL_Tj_;spm|l;B?98e5j9&tkrC2N.1oN5(T' );
define( 'LOGGED_IN_KEY',    ')=Q@&LLF=73R5*,E`fr{+Pr[Jj[FC(VWxwalpi:xn4Kf!=0`bc`#jny00)Kga*/j' );
define( 'NONCE_KEY',        'c<E)4lKH{-t`_&rph_{lq*p:)>5HZC2C+Z)NFO?l:c5<o[sVJo<ME).@DXOJ %m9' );
define( 'AUTH_SALT',        'ejOoT=&Z.ce3/hI!fln9]^%*Z4#Ff~Hu~H~Yf-)Z!qFSkg[su8ajxTeop8/=E@s8' );
define( 'SECURE_AUTH_SALT', 'EH5<iH7)8cO57Z,36==VQ4`atE!;NoEN#rQ6VNjM?n05PL=D)|o,W>fHa7U.&)u/' );
define( 'LOGGED_IN_SALT',   'T.dA5|p/HPK=JZLNRQM7S9ZSpl+qM`Zap:%k@;0kP{E1IN!3hPVIB>sj)eR{;JW.' );
define( 'NONCE_SALT',       '<^^G.VTAM}.OPe:;^/`F> x,<=dpP87v& h*u#PMcV%m|k`JDvJKBcF}PdI*Tflj' );

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
