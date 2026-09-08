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
define( 'DB_NAME', 'noida_db' );

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
define( 'AUTH_KEY',         ';[ZY{>2cGsAj+G>|`l&$b4LE^kKu?vsciw8C p2Wk4Sb^Ol2?#aiD1{EI?tT]h&q' );
define( 'SECURE_AUTH_KEY',  'G)mky}[WdEwxc$]v4Q7k/p?u,X]i>LAE|=#Xd-9N6icg.P[7r9pKCwvxcd4oCTQP' );
define( 'LOGGED_IN_KEY',    'w_D8-~99#pFYSGd/7;fN&4So[iBCLueCKc)X(9s]CVFSWckwPBq[iO:P`L39v-BF' );
define( 'NONCE_KEY',        '=qCbJr?8g?,Yw>hshSGR[yC.6l~ g4x:?.3|X<#pX])8XuiDPU#O?F@ELoGM+Y$%' );
define( 'AUTH_SALT',        'v:$CB(_KR;RYsTiGOU(1p;6mU`Rq5]+<6fqPeD.{OPv3%b|}o+q=hvD2OtqRM7@H' );
define( 'SECURE_AUTH_SALT', 'C:!==wZQ; WhrU_pDJ<k`noo L:OBMM0[t=`XY,fxr8:bahWS9&*8T0-kCis!X^q' );
define( 'LOGGED_IN_SALT',   '`p<in?b(Pm.&EW[_BzxQ=&:yKq|S!_%?Xl2y!PRfsckpoS.4{vWqJ/VtWd<>U3Y~' );
define( 'NONCE_SALT',       'b^y8)|soh!er?sA%$5}<~r%~9]jE7=VMb](7,LhBb@B{%8h$x/Y:y^^c._DzR?AK' );

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

/**
 * Postmark Server API Token, used by the theme's
 * ardee_send_via_postmark() function (see functions.php) to send
 * contact-form enquiries. Kept here rather than in the theme so
 * it never ends up in the theme editor, a theme zip, or version
 * control.
 *
 * Replace the placeholder below with your real Server API Token
 * from Postmark → your Server → API Tokens.
 */
define( 'ARDEE_POSTMARK_TOKEN', '2ac5b94a-ba9e-4b78-a51d-df07b6c488fa' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';