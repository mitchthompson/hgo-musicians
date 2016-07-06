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
define('AUTH_KEY',         '>.gB`ydpHk2eO_L{wqU76/-OFl,0,$syaaaZ[>Lq-[6d`j%I;A?A<MW3zOeZ?IrS');
define('SECURE_AUTH_KEY',  '@+:ok}^k{~qHvrjVy,!bi~kCz:X*47<-P/!Wik.wD[1zc*dR;Yil7*&}h2d2&G$h');
define('LOGGED_IN_KEY',    'G_^3jdBEt5+<tA^X~T;.7JJXH4PI%4e^GeChyW:Q5>oG;_eft69cbY9H>c8sz{F3');
define('NONCE_KEY',        ')8W3{^{ <-XpJ[,MHZ#fR^LFlFaol5LcUmr!2CcFl{w*H:5oa(hm8F$0HF6H*j~p');
define('AUTH_SALT',        '$`3ozfZHhBjS57^IC&ahVjHowQke-`@>tw[g>k(hN>%RhTF|;<N[oDbscc|pZa:y');
define('SECURE_AUTH_SALT', 'D4eb;7IE+f|j8?N SQl7vz^C6HF;W:n#@0h<q:q7cc6*<sxKM.}(Ks%X[C~9*V3v');
define('LOGGED_IN_SALT',   '$FFvYvgwZ4PwuNQs>,g,ijh>cRnvGJ1wi|jp%ompUO>qq0>$F4vSh2 {<$/MR5zw');
define('NONCE_SALT',       ':>pf{E0X5s;S8ITjZKEo,F~uf/p<=( XS5s0UaN:]%nEotS+jo/L^,scZ4n.7pFU');

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
