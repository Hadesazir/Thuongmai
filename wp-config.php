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
define( 'DB_NAME', 'test_wp' );

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
define( 'AUTH_KEY',         'e(2OU=:7=>W)MEiy!iNHXB<#A*l8<X8UuA2AX>L$m8}pR~JN`oosHN~l?cp}eH*]' );
define( 'SECURE_AUTH_KEY',  'p-PQZ[,8*L=#R=KelxfHZ{VpY-/}AmVia(WtqV3}]rB,lH>{p5/EB**%^jHy&K>Y' );
define( 'LOGGED_IN_KEY',    '?Q@kvL-N+9<8{6}19L!^T.2qQ5z.V<]~hNj#=y0;MDyueKGK&<l2M/zAMc!`U}f+' );
define( 'NONCE_KEY',        '(||u?7)d3g??*e0CFiE;iGO@X!xZ$grM,rhj>~XsglHx/DC$w.<P9r7d}IzN;zXT' );
define( 'AUTH_SALT',        '*rTe,Iwfr0B,%N1YbI)$?(xA)I:b4sgD-l[#{:]/st}W~Ju=a(vquzH<DIlbqFa ' );
define( 'SECURE_AUTH_SALT', '8&;E5K38#?@F!~k#u360Tj%>mP{NqD^>{QXyO[IP]df58YhAR2/G/vM&dcYg]$z{' );
define( 'LOGGED_IN_SALT',   '<5yu9Qi>B!9+&:G:#KECVSJ]&+)jQHE9^4O}}e3?ly5pM=]gv,OGN?is 7#/UnZg' );
define( 'NONCE_SALT',       '#L$|!3w(zepPEf!{KN>N9>o^h08h:/prm:N>UDxw/*:^Ym`r0i<E(F&TVSLGr|HM' );

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
