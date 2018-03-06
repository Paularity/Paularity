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
define('DB_NAME', 'my_portfolio_db');

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
define('AUTH_KEY',         ')rg,KAY/#WQ$,fe64`STJaE9/g/]l|Jf87qHl7:b1}SO?4)y$@NRVslvG)spytg;');
define('SECURE_AUTH_KEY',  '~C>}-#]TB,m!(SLeYY.w{0BDe.i*I&qpO,$=YBUQi,9S jE6n9cul 0jJ{`,v[nX');
define('LOGGED_IN_KEY',    '72y<YKWRGIf.yZ3%3-9PW#?U1h9?YKY91g{G++RgZ!u9oBHi(JQ<b--[Fc6y}G5|');
define('NONCE_KEY',        'rh9^_$pTL7ak8QInixb%?~bOmf5mZjLo2_^;Zf@E}^gFppAg5DC NK;2P/m|KEQ7');
define('AUTH_SALT',        'Yj,Ml2j@t$%1Qp}FLkQOsWS,>;c+:AN(SB_=z.(<s)]u{+T=S27Oa}lwV/-`Wi)|');
define('SECURE_AUTH_SALT', 'T}7k~?hD#+oF>AQ3,^CHih%W!_TdNlpMJ!*0*WePI@@P>,1ywIq}DF>2%myWCQ.<');
define('LOGGED_IN_SALT',   '3$wT@npF EFk3d VvJH?N0rMnLJcY-7EJ+FM4r(s~tX{65]R9w!@=<cVL4VbAajT');
define('NONCE_SALT',       '*MclSmAZn@y#0sV>qGOk]F_5RwWmu9uah25d]IopD}4F:w(YFr(?uI1BW~GU@:!|');

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
