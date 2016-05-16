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
define('DB_NAME', 'tonyarenee');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2T,1^Eco1-ML ]4g[:xhy!(E&|z&~@DG[{lF)m;G1hEHuL3t2IDI2swo)zJew@T=');
define('SECURE_AUTH_KEY',  'JGnRPm03n./u*CgzQwzqwZJ FEvD:2ogjeCH{u/4xD/Z!f=i5Z7p:RPboANf}+=t');
define('LOGGED_IN_KEY',    'KiQ3)*Apr+_?M+d<iv$~WI7$?_:DEg;g),;e2lYp{+asm!-_F*WQ@@g03ae]yI6)');
define('NONCE_KEY',        '$]#y8-Y<Jvb>1k,t;:lKO2$COvc7Ai-sJIC,RA7?h~k/jJY~4:8yCb9-> b1rB^G');
define('AUTH_SALT',        '2]h%&Vaci#[F%~PEJx|<WnoBxr$E]kA-wvIQvSuTt@u+&FHC[IW_2.*&jA2%&ClH');
define('SECURE_AUTH_SALT', '_[n}^<9BCj;Pgg+eSMK>ZA3i_TF{`Y&v1t6c8BLvIR]?$VVIt=F*U%Y&P;%K34Yb');
define('LOGGED_IN_SALT',   'L~to{`VVCz(9Vl@j^g|e$$@Ph`>!I>plaLw7,{[*UL5.s9I_wcIXtEVKg|uZa~@3');
define('NONCE_SALT',       '1>d5-glhDE!!_Jv`;u+=g0^s3nG2hhO}~8;DYeqI7lPwAGs6GP/Vc8mN+b;U+[Mt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
