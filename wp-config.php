<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'acc5012b7770f59095bf8fefb2426391a5568f2b793eae7a' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+WLhEf|+,5 :r&QA Nkdo%[L5UFX5^=h(V 7.iZb&%gJ(Q}rDRFpE.i#<hjQ#-t~' );
define( 'SECURE_AUTH_KEY',  'GmLL8v}Wg{nqeVY*.J`]hFI:ce?t$kFh0]h1_?o)[hRe{[?PV<|pI+7dF6-n /!8' );
define( 'LOGGED_IN_KEY',    'r,9# jLy:nQf3MN+=BS._ikT,ha(6)a@rcss>JZ$:#hTX={M,B%6LD5)_k+$y>q0' );
define( 'NONCE_KEY',        '6E-IE*TbYdz68^-A#d,fD!uC5&M> ?hT1^K{j@7+k(Lby[Br?,S|)YqCyY]l.-!|' );
define( 'AUTH_SALT',        ']_;#^(gG_jF~zis9WgGl*1qq>0;+8:[@,bnSn&)7ZtUmAUJRjaN;WDf?S&l`c7ol' );
define( 'SECURE_AUTH_SALT', 'Y#M{QR y^L3NA`thbaD*rEiJAHo>#gq;wukFXU{:JH|d*~dC@7E~n R#^*]#qt$.' );
define( 'LOGGED_IN_SALT',   'tmz;ux34N(P0i`+E,yuo-1mQ~ DA]k;9E`{`x/OxZ69F-Mw$:3sZ z.7*^90F5<t' );
define( 'NONCE_SALT',       'xCQ/_tA/WXseqHP9X%Ue:n;%nlaA({QiM>8CG<^IlNKPdqi7<A~E <&Fn#<@6Iy{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
