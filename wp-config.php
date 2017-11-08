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
define('DB_NAME', 'office');

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
define('AUTH_KEY',         'hX!S(I]5_tsy<dM)Sz/hi.J*]Q;:e[@KzP)QJc4Q;lH<?ZfGjtv`Z#3Te}iJUOO:');
define('SECURE_AUTH_KEY',  'a>Sx(7v`X~vC1Da|bkr!9R(k&1 L*X=~2Sq1rLa*kaHY.tyt+8e#NOPj0A4is3.N');
define('LOGGED_IN_KEY',    'fw1G>v@pyg$1W{`a&5mawpUk40fT%40_1h&w0lAL,!GW*tjh9)=HJE}[Cv?As;?S');
define('NONCE_KEY',        'nJ0GQM_j!ao#5@|/L8hm/[^4s}a2-aEjg$w$d`3MCRg23*~0uYg6unc!fV!@/Nz4');
define('AUTH_SALT',        'hVI+*FG^64_8U#^Qq++6E-)20RkEX`kEcDvYP|or;xH)n1`a`D`fG!5`VFyGV/ck');
define('SECURE_AUTH_SALT', '-oyX /d:mU0C`0JYG.G{/{Bx1%y)( 2x;mnJYV&wz1rcS0-+%D$_ZRmQB[ZR>=Mv');
define('LOGGED_IN_SALT',   '7]eLM?leeS?1uJdxC%yb/YAziA} K011GFJ1+8BC bckJD;Xadd=L?kSgIW9B(Mm');
define('NONCE_SALT',       ')xe?Do:J+jh+he@XcwbdP2(ju[xh(X:*79,K`PULJ*CNJ4Aw@=+}jsmT]Y5d$HP7');

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
