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
define( 'AUTH_KEY',         ':6v<yTxb2gc+(JDCO}E:N9|M29<.zBz,;EJA5U<e=N@Qw%[9{drZ-{<k*FP=6/`e' );
define( 'SECURE_AUTH_KEY',  '{H!80jf8sI{l#-l8FH%Bp^c`gr$SuY_^LI@Pb<mI jUXfP;5n{vMXoB5vwUEb*a$' );
define( 'LOGGED_IN_KEY',    '=[8$x{y?02uy@jbl`CF mokg_;Mfo87-c.@agIJZ_> hHP.Ee0amI]/Z#Jf;M{&u' );
define( 'NONCE_KEY',        'D~p{/]{gi=1:s9]6|/l>p3VEKp |LM<D]_rmi_Mo4/&]z/jHUTVht(7B1OZ}(Syt' );
define( 'AUTH_SALT',        'C]kVL*kX}@?7uQ|70$|D-#``?.@H6Ak{mYL:SRx8kVN1.q>`Lh~/0CUwy!P 5IS|' );
define( 'SECURE_AUTH_SALT', 'pQ({x67PnBn3]W8@Db<Vk|nb8}]$B@$?YbR0 C=S=WsoB7c--bM.q$;::20(=6_*' );
define( 'LOGGED_IN_SALT',   't6O=T8`9q@b(vd26dAsOvE8hZdCmboMF4xWwN_EtzbZkRn3>x0_GMVE4)NO<0qGV' );
define( 'NONCE_SALT',       '4BoR,V!bEw&.EWU:_c(yJn8k2WgyR}/j%nHIENR%?66r@O:ywx(M+2,gOS+y9RgQ' );

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
