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
define('DB_NAME', 'review');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '#{K`+^wN9&r)8rBR<%S0owMfzl)e5sQ`H&OM|/q;ah{JjAS{(`4WA~nTXz;=DB3J');
define('SECURE_AUTH_KEY',  '5}u#F2. Qu;r/3Z6_M;QZc=-Qbvk4zq_g,O$x84r|lGfHI,2;^)[yQbP}Md,%AOV');
define('LOGGED_IN_KEY',    'mPuKZ.VVxXMo5.8sIe@Y6>_vGy`Vnj:Q#3@px`e8XNYm^lR@-2h4[S@l3{]Uk=Ph');
define('NONCE_KEY',        '`ikEEvcSv%.6D1gLt?!r14P/ vq<%h/ Kr=!0ue2Z4gri2Qn<&D;+6&lLL@_8Ro}');
define('AUTH_SALT',        '4)z~aC3l}H(x<V*4SU5ANUC^IXb7L0)2S&ff`sAU<?,3,H#EkW+3O?s8=RTXv|L(');
define('SECURE_AUTH_SALT', '%9^bY=I?9S?<h C-]g3*|`;tndJm=*>17!a`d=njc{dqwZxX&iBkX_EP<_?Qjh~e');
define('LOGGED_IN_SALT',   '+S>Gsl|h#?i[:`9wu:~^t1ZhlXBB??%2kLX3<_?o&}Fi;(?HP}y$b#}qg_tys^9O');
define('NONCE_SALT',       '?wXPHtZ.`^37 ypF7D7q%J!7y|&49$#M,iNHJ{(!R;c>]o|t^#L|CL_ML@>u7YDz');

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
