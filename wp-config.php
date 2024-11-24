<?php

define('WP_CACHE', true);

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
define( 'AUTH_KEY',         'C&VfdDp(u!2B2D*z<>e5i_(NMkmsW4$LpL3UBT:b6aZz2c]}]%AQ+]IwR(31++@j' );
define( 'SECURE_AUTH_KEY',  '>`E}B&.1Pdeg]dKp;  )mycpYwWlO(a#0-L*]dmJ8!A%B>7Ph/PDp.#$mGh|lJ0!' );
define( 'LOGGED_IN_KEY',    '$vekQ&vr@LOW?(Xx<4>*mP.5XUP!yYY1_K<L-v2xQaXn,~iJWLS}ZB6gm:fE+r{)' );
define( 'NONCE_KEY',        'Ft0)/D17MFRkV9e]m8elk*ynB/7`=2jtu*(_mv;I*QqO:%8Z%JY5`-^;, <.VyOA' );
define( 'AUTH_SALT',        '7IV0 o`.Xw|@pXOa-q-#-`HCE&~B=l<{kd x9AcjACgl.~{m{Z*@ETol$!dagR7o' );
define( 'SECURE_AUTH_SALT', ':$4j:KoAGA^r/)lVA/FO@B)3#PBt1{_EZJO}eO{z!6BMSh8#qpB1Z;2!<dk@`9rj' );
define( 'LOGGED_IN_SALT',   'qLiCjJu8~6}{oXTM_6(j<%BL1?LW<JRxDKCAUw/ _TxazAESO{?Um{C5$1}sd*_I' );
define( 'NONCE_SALT',       '|XbwYKqLH{jxzZ!w7:{q7Ko++@xg*f6uZ2CD+2#f2m`<#WoiZPmA{n)qN(N/7!Q%' );

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
