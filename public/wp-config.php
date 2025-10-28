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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sag4wd' );
define( 'DB_USER', 'sag4wd_user' );
define( 'DB_PASSWORD', 'Str0ngDb2025!' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',          '}tOO9i &|]8{<!G5nEZzK`+j#I8:h$GK+`YA[r1r:PDSERj-Gdth6QCwvKiy:)]d' );
define( 'SECURE_AUTH_KEY',   'iOf2@Qnhtllh%v`/?lgpJjY<;6MW$KdTP}}vj]mxRMNJ(j)/F<Dm~fJOl>{A[g06' );
define( 'LOGGED_IN_KEY',     'tQZO)q/pV9v:Id$*^!fl0?^q&P;_J.k`<IzEIJMtf48?>{{AH&iMq9MSx_7Av8:f' );
define( 'NONCE_KEY',         '3m-9;}D/iS}E2xvn))NC`,|p):-PsCn&6t/IHteH3voW=&n&UCAn/d?Ih?T:Nm@Y' );
define( 'AUTH_SALT',         '|@:W:pyhZJ@V>KOf5YOuj^wx2s&g58FW8@N22Z1?MQ1]js_d[R45;}TwikoSSpK-' );
define( 'SECURE_AUTH_SALT',  ',m#Jp6Kdfx,[62>5.8o9Gg>|usx^/sp}6[^@u-+ccQ@tOR@aweEv&xnxNg1+{x^m' );
define( 'LOGGED_IN_SALT',    'Jh/uxLfu9k$z@Is:?aMS[g(Z?izvZ{9aB?Yw*cOr1pN|Z)m9LZNI+b3_#F^VnjKH' );
define( 'NONCE_SALT',        'U_GH-uuPwXhLUdTn-k2o^G_pc^~OW<Kv4b2Qj.xBG*4s#l2cA90xlm|8,`5zOQ,Y' );
define( 'WP_CACHE_KEY_SALT', 'dIz 7v(w>+?ikZ[g8q+~C}6c+{?{r.P$deu%6/MuV7X#D%V::O=;@Y&MQvC*]QFs' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
