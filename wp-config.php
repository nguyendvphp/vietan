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
define('DB_NAME', 'va');

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
define('AUTH_KEY',         '&XBses2 k>kPLU-cr@r2<7cOMp+b#D.?H(`yQubS_I@5BzZ/*:)j!Unr-Bt<|P_i');
define('SECURE_AUTH_KEY',  'nO5VvJg-bWm&[:X;:Dx(EXcrD2oA}8{}!&J]T8Ev/Xr1)Kgn6EMJe:/!7xB0VWXY');
define('LOGGED_IN_KEY',    'M&fFpi?/0pELC*|v*CC>ot/7Hb-R7/etU{O8MshCt+<+)j* URsQ}@9CuTxq1phA');
define('NONCE_KEY',        'gIjUPfsa<Vtqo8;Q>X+au9p$xEzT I?L@6LcTHZ;|WT5^-g9/DLP[y_KZ? ?7c/?');
define('AUTH_SALT',        'ipi=LP$nhb hhKXmCk|Dy&X6A1KE^hIXQF;DJQ|WK}Hox>SnW*l|hCc}q^=%5r#n');
define('SECURE_AUTH_SALT', ')E%9s3}3?w[6Y>gG,%qWcTq3_=k&8rL1@;,kq*op3:Q$+GT}Li4UODl44hk2&Z.Z');
define('LOGGED_IN_SALT',   'IG!<$)YPa APz?vL0QJ$N$`M#^D#HRk2lJ/j@R`^>cPs`^|3F U$-ZESGtNZ^6ZN');
define('NONCE_SALT',       'm-*G>5 9s}|W(}@-2rB-JrDe${jf7:|QNae~1tb:(Ny(^6$[WJ]9J%4rU9Pnlh/?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'va_';

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
