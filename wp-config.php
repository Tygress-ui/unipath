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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '`j8? fJ$5@hLga_ki3g^]7mjLDm.X)#/9 .6p|U[+zhV?%[sM~cmlVz[A?D>K9y*' );
define( 'SECURE_AUTH_KEY',  '-ZAR2jIEWwv$;yLcW[?3P8/krEzkLQ4)!jWfFLcT2fUX}:KQ[gULrmgMK+i*,/;)' );
define( 'LOGGED_IN_KEY',    'A}ax8%:^rs1 k/S&:g QUF=OwrEEA^*DmxO5>sg+,23&97z]nz-IS&!9+qJf=r>h' );
define( 'NONCE_KEY',        '9Y5 atw7?*sZuNt<3we3]y`{~b</.U|O0fUb?hO.`6OKh:-lXi@-Q%DOEc?W.EUJ' );
define( 'AUTH_SALT',        'xZ$I]EKp|yuOFK`U(S0Oy/+40Bt7UdOIl a[.<E8L7)JDgJfT|/uMD(CiM11`37-' );
define( 'SECURE_AUTH_SALT', 'Kp|4ht4?I;rLHpE:hil<aaMh5D>6T7%>e[)]WHXLSTKjl[{c5xdXBr,|2IFjI][e' );
define( 'LOGGED_IN_SALT',   '^V_0}k^;}=+_au/wp4SxOBV|!/`_#%Yn8]<uc.k,JDR/.d(96HI[E#q^&8k!0agJ' );
define( 'NONCE_SALT',       'iRa]aew-CtV%Bcl$-N!WLUoaSO5:E>3~Ac<W;Ej7QI0KJS4y^B7q[81BDdu~i=tS' );

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
