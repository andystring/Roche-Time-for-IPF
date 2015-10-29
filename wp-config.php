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
define('DB_NAME', 'roche_wp');

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
define('AUTH_KEY',         'Bw(+1N-j9j43DLJ]6{feN4sN9M[2^+bK8OaPd;k9u$J!q4hO/OU&H<)o{ET43HSi');
define('SECURE_AUTH_KEY',  '>xiM$ 8*Ke(B]4 S`72Iaz4Js|JOke@9+I~+i-+8(!q.Tg>@ZK[R#w}2=nVvHbus');
define('LOGGED_IN_KEY',    'DiCSxe8h$d!s(#HXA})LcZr#xZYX/IG}+&T68%|RxY:uDhCuIck$;6s,iQltR;@X');
define('NONCE_KEY',        'wrtdQu`:c/(T-<sTCk@ 4Iq^OF/<,1uJnm-,:+:@DjS^0(z`~EF%VUK-q7g:mM`X');
define('AUTH_SALT',        '<B KB]vYhj#dCbB-76ONe/^9|ygTF+!f@7*]tFJwURB7`5soPN&HH^6]wZ|hAD&{');
define('SECURE_AUTH_SALT', 'v~&`>j.9UbMZ!=$fOO*0+Le}[K~#lq|L9BqXu6?$%GV+FyY: rZd--;d/d&Gql]L');
define('LOGGED_IN_SALT',   'RPJ.iCa-1vd[,,R]q 2EH)-s.BUzwqwm )d&4IU/MlJOxxj~{q{uKx1OvVd|Ug}S');
define('NONCE_SALT',       'I]bI>?`$n-Z_3ThfICNUMV?G WM4):MN~YIEZxq<-6!r>$ul1|cb>7ey`LZxk>=W'); 

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
