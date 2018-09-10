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
define('DB_NAME', 'secretireland');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'onp$gGpr(EH#kC0,B*PjU1eh<&z{R(U)oQ}UBTLRtNDp*Fu@&T4YaZ>c^/}CE=nM');
define('SECURE_AUTH_KEY',  '%tv`O$g%7U*uoZv,0$y%i&%n|mfz(N}z*B76d6;rGoixg7g.FV5O.TK>=6UH.(bQ');
define('LOGGED_IN_KEY',    '6VT>%y1:K3vSKXM[3gAa3:HZV;2;~]~j^8?2f5gD_]>Fn.$WKwBFd,V[_+gEhcs^');
define('NONCE_KEY',        'No`*_>jQ[W^~40H^X*_>Dy)]H<@M>{T6x|uvh l0+,X99WYX{K3*U9D-mdjXhw_P');
define('AUTH_SALT',        'PK>4CD<;1-_?j,N)+z_kZj%r6?zbpWBD?M,}(=F1S#`(SbeqsGw+c <Cf@BBBU#}');
define('SECURE_AUTH_SALT', '<f,~DAWB 8<[Ez~L(YZk=h$Jo6HqP<pz j`_mL,#I/.,{<5LOh:k:Vazay@t@?z}');
define('LOGGED_IN_SALT',   'CBf>>#ZvaY|Dw:(:|{LtySh-kiHJ-b>Fp+x GzqkO%T|r]FRks}iPV,s@i$2iIvq');
define('NONCE_SALT',       ']fk<I6cl9Ab-|Nq#1x51T`UIAq]2Awbnz4z>jP}ZZhVNfxzStDk8m6q`fL/N`yFe');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
