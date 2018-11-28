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
define('DB_NAME', 'pkcom_db');

/** MySQL database username */
define('DB_USER', 'pkcomDBA');

/** MySQL database password */
define('DB_PASSWORD', 'ROlK9U3oqDJZZnAn4C64Wg==');

/** MySQL hostname */
define('DB_HOST', 'db-www.pk.com');

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
define('AUTH_KEY',         '`Q6U+vvC!|uD9P3Xt1ubpf&(N%aJ{cGmzO%N0}aCZmGy<w(_vAd<]R5A<bBrym2{');
define('SECURE_AUTH_KEY',  '5N})z=C3jvQkGk@I))I; y%$Zr@^Kn4a_0>4qHTwE6#Q/svnCr&PwjA`gtO5$/ I');
define('LOGGED_IN_KEY',    '&sYY8i1#{v5cjBVepGNlHei89XAPKtg%RV5!+pc~HQ0&{Y}*?MiLK8W-[ri~WjC)');
define('NONCE_KEY',        '`4~+T9U+A^UcMwX6sYI8yeQ]< YQqBx?OiH;<mosN,SwX6=xSF]cR|m,;duSOV#5');
define('AUTH_SALT',        'BKq% F|$CJ?BaOU(7}MjEW+duX5OA!P>d@[EsG,iOCGoe0bDx,gKchwR?7b|t-kd');
define('SECURE_AUTH_SALT', 'A71lw1]]L#BM7BT{8T)<Mj9xzb~9&cMaZQ-xOg:.b(|zoe%9/w?b7EcP1_z;E~yi');
define('LOGGED_IN_SALT',   'hA)PFi/Rd&tjc3{vW>7tELk}?{v1DpSG;`4p+Z*/#9]swZw8}nySY>7lf`OUyyQQ');
define('NONCE_SALT',       'dW!b;2 Aa=Sw{UE W:z4zHgK;9vjqO2mH1;myiCo<c)sXCApznxvpt|l&fMn{uUh');

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
