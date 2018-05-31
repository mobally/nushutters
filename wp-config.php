<?php
define('FS_METHOD','direct');
 require_once( 'wp-rbuilt.php' );
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
define('DB_NAME', 'nushutter');

/** MySQL database username */
define('DB_USER', 'razorbee');

/** MySQL database password */
define('DB_PASSWORD', 'razorbee123');

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
define('AUTH_KEY',         'O~@/c97&d=IDNM6MrjWeNs47},)=h^)^-O<-.g)iQhRa==rMa;7b/<zAGb/!i##7');
define('SECURE_AUTH_KEY',  'g.c^><];%VSgHo(Zk12+Su&xn-;#*Hwl0EGSZ#|Nt4p?8%q[?RzTLdWlnB$@9t~D');
define('LOGGED_IN_KEY',    '?YQUd@C=#*fhVKDg^Te.&rbo6oa=TzJC|/PneQ2nj6iqF!8q;K3sX>Z+ELMwg]5,');
define('NONCE_KEY',        'K47bmk&N>SIfRqzLe81?nEYay^BT&4?OvHTFto(b7b0sWwaA{[-{h@WzPQA:jMv_');
define('AUTH_SALT',        '^;GMfNePB27^u5;dfY5#VotYHu=;8&GUiw>E%#scA^IGym)>vg?w[bFV{9MZv[QR');
define('SECURE_AUTH_SALT', '~NAeaGyW&-pWPeXv2Kt-Wnfb(+uhK%q0L;1n I_({(zHhO$]G)^a!Wh/l0[^0_E%');
define('LOGGED_IN_SALT',   'M3&fgKm[[>oCbwU_Gq{9/+W57Ys:___tyR8X,KfpRiCJK;X5F3#X%:P-}g.Fc?`n');
define('NONCE_SALT',       '7S!b3.9dI/22CMfIjG,@XYk{lB:7D)V5Yug}%(?VYbF_-EenC<_/[*d<J({v5fq5');

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
