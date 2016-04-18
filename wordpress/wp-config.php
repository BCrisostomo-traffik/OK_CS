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
define('DB_NAME', 'oshkosh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'EAO.%8x,Gou+Y!o3V:,[R2kgWdGB&yz#LE;s#uC$>o9SE6W3/R|egez+ul+ax)ct');
define('SECURE_AUTH_KEY',  'Ln`@~yUYe:Y$u!Uq|W/XL)e[DK0M!R>X+QK.T_7J&u1hLPO>eqX*`YdF)6xPi4-N');
define('LOGGED_IN_KEY',    '5#OV=yiphS?9[5*mX,U!JgI.=;Dsi7%q ;(x?d%I-KD;-MErFr#Z(RgJICscjBZB');
define('NONCE_KEY',        '*_E=rH9]-ChKD5L;UPd1l63Y6w,Fs&n(o4 i~/8dNl/83wBlxM&9g$^~(=}6x#;*');
define('AUTH_SALT',        'CBk-A+Q6TOp!u@Rpg}N6n}68):JIu,D>uWS^7[Lp9lnfmA.Ob~Ak35ewU|r-`sO1');
define('SECURE_AUTH_SALT', 'BL0?=cXyyQrV$%Oq.*O,g{)2h0,~%(pvB1Dy6,B&nj1.]R!r9O`s+c-]rM+/I:G2');
define('LOGGED_IN_SALT',   '(%-k1Wz#=U:d3_pDF[e)~_kJ@yt0omMBz{>H9ZP|vC}S51f3QNc+P`c|z;b@SwCe');
define('NONCE_SALT',       '+(JgysKn`([!j6;8MXR{Hf(i~_5%@uJPn$M(F<LsN&_BI(fZ~!IZ}ICj{AN)pyY0');

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
define ('WPCF7_AUTOP', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
