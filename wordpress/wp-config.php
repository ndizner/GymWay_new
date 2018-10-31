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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '-g_}IgW>>3XHHGQP=:it;$h.u7Vc-[Fja=s[EreG+Y@}VpEj(wDYQV>0/5#s}Ze(');
define('SECURE_AUTH_KEY',  ' ;6nK|VPbFdKjfms|$6]O3bQolRkf=J[/1uUI_D#:ku5f9:Mib>9i~rLw)^}kQvd');
define('LOGGED_IN_KEY',    'U~Wja8Q2dJL< z%75jmIJ%o=0Ec~ s8j2KAez/CRv4/p| ]KV=&^sJ5Fs[haHs^2');
define('NONCE_KEY',        'RPfC+qh0d[g8&15Sumbuyz|>s2]{fu0:J/ajJlJL[;{&yuY)39:i?<gTRm$&s8Yr');
define('AUTH_SALT',        'ktb6xY:H4=DzS8Qgixm(,)1IgRk58O*wQW-=Wc9In<s^;c~!-=$Cg_^Zdt#<JR|4');
define('SECURE_AUTH_SALT', 'hI{0h3?ns[%0WOTCs+;`y%N92Z!h_Q9g#90h-uc#?Vm /X2a&*/y=+R4~y2XA9[u');
define('LOGGED_IN_SALT',   '0W(hvI4DUUcK9f}d30:L*@{]LaYoB(pFN?o)C >`p}b4l/|rYTFP [8nW5jMDB0D');
define('NONCE_SALT',       '8PhSB9/ixNrY|s5x_A0NA4iA);/gR&!FsWi&_]s4/trY< @Qj]pVZ0s>_yn?Q5lu');

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
