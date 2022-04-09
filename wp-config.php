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
define( 'DB_NAME', 'hasanecommers' );

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
define( 'AUTH_KEY',         '[iOW~0UQO?-#o6BO 5-lfu%@wGqA=~Fi_W@rsp?GR`97,zH58o~e5gq)Gh~Cv7o@' );
define( 'SECURE_AUTH_KEY',  '{B~6#a0CpOkf%2Q).EG)8]5$}:_Z_Oo@X^wWZ_.9kkeDO%B8hz`k:Jsrr1X$)y,^' );
define( 'LOGGED_IN_KEY',    'N]sntlv::rtvTxU;5Fa?Xh&ZE*gIxb63IWe)UhLP*ZlEYs9{D~DdK,w0^ULqfeV6' );
define( 'NONCE_KEY',        ',Q`-Vzwq0k&ee]7(5We)g.{q@2ZNoOfT+;JMtU-RE;Hj-2k1iBX1M:Jg~q5H4Fav' );
define( 'AUTH_SALT',        'T@V|4H<:&|;4.(n&2]Ol* jTR<ikJ(wqw-]|0cO&##+i?k1AsFUR,-*N<c~P~0Tf' );
define( 'SECURE_AUTH_SALT', '|>2e>2{}-}?RN#Yr8]3`5a;Y%z)/c>Pf$kxS6!l[-Ke/!3_aRy4f]l/DyaVe`X)l' );
define( 'LOGGED_IN_SALT',   ';rB`;I|TRy{__sSmh6WACQ.`6|$KI~z|]G@~xX!T5O))=L0a8LnZ^3WnsHf=fhm<' );
define( 'NONCE_SALT',       'mi|#TFKh)pkbC{Ia%$)uMYG{^r0e;Q |JVg!]:bPfcKR;4~g%85pmN Ww`A.}6C-' );

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
