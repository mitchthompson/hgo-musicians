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
define('DB_NAME', 'web210_db');

/** MySQL database username */
define('DB_USER', 'sammch1');

/** MySQL database password */
define('DB_PASSWORD', 'PotatoPie69');

/** MySQL hostname */
define('DB_HOST', 'sandbox.sammchaney.com');

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
define('AUTH_KEY',         'q7_|fpUy$[OnDi-j`N+bgfDFU>$hxtE2GOaClskPDA;TM& M>8PayhSZc#9V:mu}');
define('SECURE_AUTH_KEY',  'iPLm?^r]+%w9B8X<#lng%W>[#fawVj0|3gw$>>vnVQx k>Cq={k{D3irhP:9~fC8');
define('LOGGED_IN_KEY',    'YguRnpOW0kjCJtef|Wgmk~qfQ0f[k,Xc_|1[H^]Ez4By#EG`K|WL<[5qSi%cP5R?');
define('NONCE_KEY',        '2Cl6g8s2}f@$dx<(k;ii]l_sKiv?VY_>GV3f;kEUx}&Mf3d]WYtD~PIR}dT=9X|d');
define('AUTH_SALT',        'saD5a|]DVAxTW#5-ZM+=t1|u)]?j Gn+k=:oe/}5?MkoJ4uz9bSG,C3fA,wf[`.O');
define('SECURE_AUTH_SALT', 'X8hu;}fto&i*a.+/}+n cN wOwq%d?te3rZL5i53QdxBT8u.c}Lxu7X-.)!WD&<$');
define('LOGGED_IN_SALT',   'V@$KWq&WCsscxDfX~`o$x:Eb^s4fa7gDp2[TYLP?CV+iLgF:+VX1cJgl7SuEpVu8');
define('NONCE_SALT',       'DCJ{Ec{{(X,eDgmQ=#}VBBC4;,cja >hzg}q9gi2~`{7&{,{g,RDlD/Y#`>U$/nc');

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
