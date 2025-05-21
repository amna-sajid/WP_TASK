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
define( 'DB_NAME', 'ik_db' );

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
define( 'AUTH_KEY',         '<.[,T-}$=fs $EEqyq?s/FY93 1FR.S:PQlTykm*-uu83v#a`Uzdx?|SY|= >@@X' );
define( 'SECURE_AUTH_KEY',  '0I<q]HX35f|_@4n4_j1X-htT:C?}=acjj@n>TRPfjtYODDF-:gJ95;Ga%kjE#}y0' );
define( 'LOGGED_IN_KEY',    '3Ln#y|W5i!?S8uVGmrB]*P-p6jXU$YGR7+4iW:N 2PM[YbZSTUd#r)*Urb%9!@YH' );
define( 'NONCE_KEY',        '&m8~Pg$WAWY=Mk3.OlTZU`:^7!F<PZ>Y<Gic17JQ55dxx?W;@MSO?jJtH;U}N%yO' );
define( 'AUTH_SALT',        '!lm.NA}}+4nOkF@n_GWj-A;{#eT{8qu@sM+:>%,t5DsEfEWBE8u6U*V@:H+TxB[C' );
define( 'SECURE_AUTH_SALT', '}k[<Xaq|_oI)2Sl3 Q0cKcf7Fs,)?Q/sR8J^1o!4j]20u[$6?InbG]v!>w4l=-uc' );
define( 'LOGGED_IN_SALT',   'D5~n:ZxlRrHoiF1NQE2f_XJ(XQ4D]xyqdW{n::3{{*_@$}.LK~y2M#L0)^`0BnK.' );
define( 'NONCE_SALT',       '5cQ||8wTMLZgH(PRU-.9n;uOH{]3NEXIO<K0~?4Vo.,YJ&o;r!}) /;+75{}HA~5' );

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
