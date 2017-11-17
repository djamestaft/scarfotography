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
define('DB_NAME', 'scar_main');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'S!,ACDBx$eu9`:EQU>:16sdH<J/=(%|L_Atmz|&5To>VN!o}wMHej)#nCGtk]tk-');
define('SECURE_AUTH_KEY',  'nj[vXV`?+[P5bA_.e%7{]hk#@*EeI{~0u`+v0!_,,%O^ae;%s#uc/eAFJ ?yF`+/');
define('LOGGED_IN_KEY',    'Yk6w(Py0wyxip|ulZn-ib&3p^;{nubrHVe`ioeXt)}-v:LQc4PgXcsl;ToGh8`Gk');
define('NONCE_KEY',        'n|A^;*/X SVYQ&Z6JCsMUSQk;}I-%yRE]Y7CzRb[|*GYy/fd7A[HCY52XZ+d[#qn');
define('AUTH_SALT',        'By?1-h|-geu|FdK9zw<GMd&w%jw=@%~Q9&R/`g+GYXcZv&Lu9j2FEn>/W_uwsgRk');
define('SECURE_AUTH_SALT', '9og^+n7aM)~QT_Z0a@#-+[Q$EcHLW53u#}`w;V:?9,N+58Hsk*$uNW|OQ/7YQsTG');
define('LOGGED_IN_SALT',   '+tyMWbnn7O)j!b46>u&,+}kP3}<>@`izPPu%rQ?cBhPobeHxx||-Ww#Td>A<{[UP');
define('NONCE_SALT',       'v.9p2#3i5WT@+CTX+;BBp5!y:O:e+H+%1^|pZEh}+p,;[>&B3GBnZmN-1]_P{#6q');
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
