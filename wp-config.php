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
define( 'DB_NAME', 'gitwordpress' );

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
define( 'AUTH_KEY',         '0_ve5_8EAsE5hFXTGw6`h,*$8dO*T,;/Y|seR#D*2IY#}4BJkd~{/R3Zvv<p{?a.' );
define( 'SECURE_AUTH_KEY',  'zD,i9OCLqM`l#`]hBjNsv!ytLoy[QuQ225a!^SuwPC}qj|B2p{le4 d5R2tL3.XR' );
define( 'LOGGED_IN_KEY',    '<CDGz1L0bP_jzf!d@E>Y5_AK5w~.}Ky]6>)-d>dA[bOTwD%?c%<3gWU*1($k5BG*' );
define( 'NONCE_KEY',        '0)mX#UTv(O[0fcMA7}lLF5yGp}N^=;N<VB,`]t2$i`N^sVsAv 8_~lA7P;)S%%s_' );
define( 'AUTH_SALT',        'pHQ:&>n#ebC(1kv]#L>~v]GRfimV_0TM*qr8 4%&*(oYS`7(apfG-&v=A0OdeNVi' );
define( 'SECURE_AUTH_SALT', 'LUp-(@Dvp@X&q0WpgVr,/4e7E|Y&zx3Pns!9X5tr..dpm[Rqt1y,xvU:bkpjdc7+' );
define( 'LOGGED_IN_SALT',   'zyk=Ue1cO DPA@r0b1LYS;rq[pUA[f6`4r@_4dP{FUr8S(N<XzCIXlF+yk>|wY[r' );
define( 'NONCE_SALT',       ';P8J8s&!($UN{IPM0Y{xSTP4V5J4oOD$J@DZHh?tuX,}Ri}a$X~##s=`+H?I.SYA' );

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
