<?php
/**
 * The base configuration for WordPress test
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chuyende' );

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
define( 'AUTH_KEY',         'wg3|>]>0}I_BxASmsV=pm#e{t<[C/s%2]CYJl>Edw+PnE1`)n6di5fCjO.ny|g9j' );
define( 'SECURE_AUTH_KEY',  'bQ:f]FumWQ&N#z$hcwjk4nl4ArZfAT}z+)G2+:>pxLH^dxy>ri0`3|bVCVW:rQ%K' );
define( 'LOGGED_IN_KEY',    'SyY~Ipd]cHpF]}IXKoeC]wS:mdU(eE#l^*DYisej&(IOi!_0cGT!-.Y@}qK:xe&i' );
define( 'NONCE_KEY',        '-?a.Z3nutZB&//_mHo=/e$(,/^_t$WQM3c5h{7zoT>N<1/s^,Lzw//stqIxf_pG`' );
define( 'AUTH_SALT',        ';d1;gH36!AM56sH-[fF5w-{H9+s?0lU16@:7JnM:pLcao%tW2p6 LAyAugu/=*7Y' );
define( 'SECURE_AUTH_SALT', '/@,s(DEN)yiGPXg&MbTsW@ab_53ljxK|q.>|r03ieXH!Hq.F3^Y%oSSEdrvr!`3v' );
define( 'LOGGED_IN_SALT',   'ZXGpxx;1vbOjd#l{AR8?wM749F%69V07ml4}f0zvUoyQQ3Y=r*b_1L=@}*3;Ay(O' );
define( 'NONCE_SALT',       '5^CAP6NG~}QYK!{-2&-}:oI4Lx:}<q#+#sbe}Zfs#*(QQo{#)[A<l@|mclR!q$VJ' );

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
