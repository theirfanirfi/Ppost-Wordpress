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
define('DB_NAME', 'ppost_db');

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
define('AUTH_KEY',         '9k!e%[b?k_Gv.a)r^@ia(d2jc,+_xH?x&VjA.1$xV`y}pJG&LUAQWUg7Wc88smVe');
define('SECURE_AUTH_KEY',  '}tS+N lw][]VYn%eG5#G1jcu@<L]C S_K+gg4ALg;t$POlxuvi5<WSM~M#WS=K7m');
define('LOGGED_IN_KEY',    '6s4MC}o9Bay7vsbZ0f}JasD@xUaxxfC?&%>Sdo=n]yZ[AM&ap%E=NhM-Q7jxi5 `');
define('NONCE_KEY',        '|0zg{SM,vy)bZBNEK06IQcih=,LMM^rlwDCR_d p>F<d$hk[+E`u.dopK<^|2Dj%');
define('AUTH_SALT',        'zTz0VreQMCs*LrKgTFhV!A/?D8Cp_;0n?51ta.:]D>c7Th9 WnW>E)&`w1%]hG{k');
define('SECURE_AUTH_SALT', '+zoPM;LlpE;m@Ik<BJLC~W.V&#9%x{hx8Vc?g,|Z?2~>P{~dUwfrU9YQ#Zk}zpp7');
define('LOGGED_IN_SALT',   '+o{ZVf@q]T(jHXV9.gSHb`GlqR7T@*-nkCs!RnUxl}Egz=7Q/alr#D>.D6d3mJ[Z');
define('NONCE_SALT',       '*5QeGHu#(O?s^k3$A`4+A.2wWYTWn~6b61YXo@fcf/QD?i7>L*;Zyjy.&>?2R&$ ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pp_';

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
