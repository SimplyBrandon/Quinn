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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress2\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'u8i9o0p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5<Q=!C[xZ0)0LCj=%xia5HHyE45Dc~LEsR/+.f)JP6:.r6p0m$!YyudCS(i1pPi9' );
define( 'SECURE_AUTH_KEY',  ':^S]g5w^n?OM7,|LB!l|~V6tt%WO|VF_IS. goPADo.W3Nue?B]GB!yhTmvUrWRy' );
define( 'LOGGED_IN_KEY',    '+cI5P`p0q51TQ1|^$iqLh )jA).B7yiK^bHDWi$Z;64`b,9OaAVph!ta[.(U>GZj' );
define( 'NONCE_KEY',        'e,o@wtcVq9?[Xqaz]G{T?SATy,E1N15@<Inf$Ze_zhQ&[nZiwG,9fF^F.>>8^&90' );
define( 'AUTH_SALT',        'm=/i>2jR%aSs#06&9_%t;dZh`=BWyU!CZfvx[D@1cT<<J4M79We*GpO]cdKCO3xr' );
define( 'SECURE_AUTH_SALT', 'dl{L!d&7^: [5NXg}Sp3-A>A~E$QjeZ6lMiiD:JOI0TTx7)/$~Bu /ESLe@YX(sZ' );
define( 'LOGGED_IN_SALT',   'y~G;CC-/d`6]]l{%iyW.fEi(-S3{K|%jIuyH5>=Y /]W`-hR?oqt}L_]JS<s/kFa' );
define( 'NONCE_SALT',       '|HgVb{(k wEy4<ag!e.Q13G)RFpde4e6yeam#O.-+kD[)Pu!3HAUFf)y]uaZrXt^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/**
 * Disable caching (Not recommended for production)
 */
define('WP_CACHE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
