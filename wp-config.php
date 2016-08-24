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
define('DB_NAME', 'heywood');

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
define('AUTH_KEY',         'Gj1Led:H0.p7RfiVCRYwe[g.W=0 )ja;e;x0]FURMMW~9z 4BEI$GPSNH;p0?RDT');
define('SECURE_AUTH_KEY',  '@W;!|!72<XIk2JU/(u&7BM^v:I3_Fc)f3(:9{4|Utw.6i)e20a74UpAhw-,TNTHT');
define('LOGGED_IN_KEY',    '8~cxy:e6t#GL>?#w]BU{82A&ZFaAtvgB#!&WPw1VK,|aH`~uftNnYd@pC;R|)/hy');
define('NONCE_KEY',        'JosrFHz^kk[9OL.U<2J:SZes Br=~`-!O[~!Nt+[L@Wwq@2aIFT+oq~Sd-36/N:O');
define('AUTH_SALT',        '/ZYq6(*)Q-j<=aJ@p((Zqtcu~YKzt;M:T?l$a`Y/-iY;d(npRAz^>OOrnwRaZ.q/');
define('SECURE_AUTH_SALT', '6d,NcXzMV^bz)Y8IU^?oA*m4%T:7eZ4l|gwF{F_,M(6%JR0W UMWICInsWCXKY-A');
define('LOGGED_IN_SALT',   '}rw~Hwi+oS%]]*Uo=EbkJIwCe2zXG%#6?N$`df-!o.DT#oRlkrLX?U7{l+9IZ2LS');
define('NONCE_SALT',       'mgX qvm8CjI%c+X&rTf(HBI4lhjA]MZyX6`h|]SZN/etyi8pg&Eh$k~%V|A8-}yQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wphw_';

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
