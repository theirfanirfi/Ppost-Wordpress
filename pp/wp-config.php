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
define('DB_NAME', 'pp_db');

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
define('AUTH_KEY',         'R9v20r}zj4ra/kiC~!UK.dZz*<:Xj1~/ZuceI5C?9!,S)!18< 2M[S|#/kq< Y:]');
define('SECURE_AUTH_KEY',  ']iSUyz`k7plz[%)chAfu:Xa0n#E53zG.>Ifs./w&rZ1H[a1M7,*l*>Yf4?9]v]PU');
define('LOGGED_IN_KEY',    '<MlOia=e,-,n3+&CyT_3]P,4o8_@GyFW7op^^FD=u7UN<@PVf#`^+fRMt{Yt?0U{');
define('NONCE_KEY',        'F;HK~yP>ovN Rs`4:F]^iI,!#%RFbHBM3r%+:_VrrAV(}c[z6e0^eemksV^wM1p7');
define('AUTH_SALT',        '0>U.O<`OrtesmPH!k)#-!>;V>n BoppfpL7EJ4PU]y&sP*EYOMy.yn!3ewXke!?|');
define('SECURE_AUTH_SALT', '!1d!yF{c[Ly9gT?M> wpxdAALX7u~//RTu/yl)AyalSl~$JO?LDGaf#jBR9#q(jo');
define('LOGGED_IN_SALT',   'Fc8&.TCJbj:7H#s_Hw^]6jAAix:!t~R:rK}c([ImnMS%kzCXm~Tm;#kTc=9kREm0');
define('NONCE_SALT',       'P,tOc^WhN+po]WY;Z5Q?!-zuG{HuZf#0:2ZX%U6E-Wv(;C4CBV}9u-r~owa/=N%4');

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
