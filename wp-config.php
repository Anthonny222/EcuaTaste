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
define( 'AUTH_KEY',         '<V0ma_B^NM4h+|vS^^7D^n`y{F#6@5oJZ`vaM.N5>+,Ws4aYq^=uN,nv_&k:k0[0' );
define( 'SECURE_AUTH_KEY',  'Tg<iZ/lPHUb-70T14/X;Y,:mfxzBcCVD;v)Y[V_e0m*c7tfonH$F}AZLi~C9d|tY' );
define( 'LOGGED_IN_KEY',    'O|M<{1W<%!(D$x%xH&:D9-$B7P[3#FY{k9c`Vyctn9R:@U,.v3K;fu3(f9Xf0ob;' );
define( 'NONCE_KEY',        '^G.#=~mI$1xOdP|@p^+Sz.T=UYh]<VIoZ:tZv>P|mG<GF|@WYGI;_B/=+ b;bd_o' );
define( 'AUTH_SALT',        'v0oXefZ}b[o|~@A_Pz!Gd*7OQ0:FH]3`tDC:XGFR[5dM(&+4;qZik<DJ/QiInP!o' );
define( 'SECURE_AUTH_SALT', 'gxDJGm8.V(&`=YUO>VV%T9,0zs+T%66xT.D]nNn0j1sA<LFC=uZWsvll!P!+!_5C' );
define( 'LOGGED_IN_SALT',   'k9ynnd4_w,]bjIX%.t~{/_2VK9%T%1g//k]5Ln%^zX~70;b$`+v.g!,l+F`KF_~@' );
define( 'NONCE_SALT',       '!:um?Mu`_4BA[nU832-g|s.C>-er]hU@<D]*0zClll;D{P<zJ<YaKVtiw>6A@W^ ' );

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
