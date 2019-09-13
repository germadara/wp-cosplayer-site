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
define( 'DB_NAME', 'wp-germadara');

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#) 8Cn`>Sm@C)<)1/:~~`ET%}jsBnazSP@ls>kv;15JC>S`X[[$b.}=LH=lZA2 L' );
define( 'SECURE_AUTH_KEY',  '%xP_z#x{?zm`:4CO2z-B1-$Txw73chts_C_c-:E1X]r${G~IOD5{9nLZC5a,#QHu' );
define( 'LOGGED_IN_KEY',    'Ax&4$xr{270dV$o!1R]?,AWh[&<sKliS#tPQ5J!lpTtL;H^yoMi|]Zmqq%77-FW@' );
define( 'NONCE_KEY',        '#@nA_uS;V:A%fNLQ09.H_R-++c.$-wMeI691@}p^JV`+=Fau0cbr)jpVH*}m3fCY' );
define( 'AUTH_SALT',        'D1Nq%!(lxq%W&HN~<]DICy:cSD0Z y2BMFf:V.V*&`/|6~|~/X2$Vk@5V;{wB2?N' );
define( 'SECURE_AUTH_SALT', ':K@3%vqp.9o2}%>k$!vYX,=@]b2(3>R.Ol})WTRTZ[JF%07@[hR$A23$s !#tg`j' );
define( 'LOGGED_IN_SALT',   'kgNh8JlEq3,o5R>$-Z<|hADYw6/}H54WtO9We?E]4;5`k8PJJ.ld5u5vSwz|wi8`' );
define( 'NONCE_SALT',       'Ia~(5k62plFDFEKFwMRWj|z4?jzY2$H!y<@_F/$%z<?fn~62;mq?idg7m=qDf;Ae' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pro_';

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
