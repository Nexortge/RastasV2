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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rastasv2' );

/** Database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         'FH|E~V_avRtBA./(E#+lFcI.!MR04YPV0YbJ9|;!iT@[v;H#/,4R^[>e9TW(3{IE' );
define( 'SECURE_AUTH_KEY',  '3cHok[0qrVJ6OHrs#JM+?C[1>|6Jqy$F!@H1tmu/myy*T6qrPhhgds,2]dUd%o8*' );
define( 'LOGGED_IN_KEY',    'Nou)+@=2H!EkV)3OCs;-|b>{y:#P?yklBA/k#0=ab0]yRM[`6C-!n9}b,4oib:b=' );
define( 'NONCE_KEY',        '}, @AWE<e~v_Cz]}.GzBB`>#mFu,R84Yza^*51G#8-rWa B}.SvI). ::YlH2ifA' );
define( 'AUTH_SALT',        '(ni0*zz[VYrJg:`MNY%on<UAK]D]8XtZUR1^j;$_YzYJoeXa`1`SC_OzlcNn2$q!' );
define( 'SECURE_AUTH_SALT', 'l_`t0itTi -kc)3^h|O^$neY(tX3-uc~2b.bAGMo%f]^_Vf>o; +^$n`JDQn>jWk' );
define( 'LOGGED_IN_SALT',   '.,#XSu?h`M7^f8Ddx##NB{/5ReIn3M]4&tuY2Sp7DwCSK#NGV/?qk,3IShze?V7>' );
define( 'NONCE_SALT',       'zPk?`7w @O|OU]fe%RsfP@#IC=KDD~AF-V-O^Rbz`{0}>KjV=rVO~v;#}eIBi@>C' );

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
