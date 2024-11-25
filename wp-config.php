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
define( 'DB_NAME', 'vp001_db' );

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
define( 'AUTH_KEY',         '_h8{V4|lSdBA%CLv&3|u/*/wHTM,HJ,TsO.xOel5hr[[EXrsop3b=.(8ekvjYV^g' );
define( 'SECURE_AUTH_KEY',  '@TdHDC+]32*aqS-E)-yQs;o`5+s,HQpCJv~hSNwt C-F4d!M/f<`R?@!I@yPDP6.' );
define( 'LOGGED_IN_KEY',    'Vllnqbs4U8..NxGF]fEdynt2Jf_R.4MWH:Mk4sP^qp.=Z.%`W;Oa|v4p $Z;|PI]' );
define( 'NONCE_KEY',        '<v*A6OZUVvYft,Q$VdwG)T{``$SN5ZF-i/t{{Kf{g<2Zk7Q5|)J<Ewr)ZE5eVK3;' );
define( 'AUTH_SALT',        'U==}Y1FUeCStjo,J])q)` Lb6Fh/hi{.[e/0V+>F~>|i|E08*M]-7[w2;/qoPP/G' );
define( 'SECURE_AUTH_SALT', 'KZUKQkHETCJ^`Oc%Rmk?gdOcvkf@yz&(J&aE^zrWtR fYh7?)jZI9bS`&iOq&f.H' );
define( 'LOGGED_IN_SALT',   '3& Sn ]E6?$}UxKFUtJ,E[?m=AL*,]F:+3Bz$l])oGtl`W%&x&L^JN_J/Xma)ewE' );
define( 'NONCE_SALT',       '^VcvBM_?cE.SZ%h+pG-aY?fJ:zdqpBsgr6`>0c=?^IPlv8&zPwnd cLapabl8z5-' );

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
define('FORCE_SSL_ADMIN', true);
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
   $_SERVER['HTTPS']='on';
