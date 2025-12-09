<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'Garmentsnews' );

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
define( 'AUTH_KEY',         't9OF<ICe-4rm<nCC`$SDc~.]icUqC;Sskp5yL8O-taNe,/=u-!g&:2ml@?],N8+F' );
define( 'SECURE_AUTH_KEY',  '0j<h{Nt>/}CJ.cRjGH8i)pBwj-} 8PuI7MH(HS^| %4VMYXxwOYZ2>TJh3h;OVJ ' );
define( 'LOGGED_IN_KEY',    '-ChkEMWY$~y:rh,^G/,;{_B2E9k}+5#{m@3<SH#.`$S([I?EZmBHHf74vPK S}9Z' );
define( 'NONCE_KEY',        'wtBt`i~9NuT)L1}Oo|4|2+{0*.[gf[CYl%tI*L0{Y@xE#7rv cVaVgso`c2at>gm' );
define( 'AUTH_SALT',        '^*Fm<G 6?WUNP]}_&ZP-}Grm~(bRt2A|%muNp-_IxFK#qT|K6`v2Q?S*bdJ}{3Zb' );
define( 'SECURE_AUTH_SALT', '-/hfYE;$.Q^pMnF.^Gk*K00FjF><1a7Tg8RSP;,PP/ymVnqNpi2$$pHJ4Id.bjTR' );
define( 'LOGGED_IN_SALT',   'q8RyeMJbo&]yC(kxZkTmRuX;:PM;@8b9k:>M~`t<9]SM5J1O*8+1p_6Y>0$ U?_0' );
define( 'NONCE_SALT',       '<jNq1mWF+:zlr69#C}/lRJc|YJ@cB:hMB0=|CFNdj*kP[iGdOl,pWgEtgd$-[Y#3' );

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
