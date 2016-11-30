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
$url = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('CLEARDB_DATABASE_URL'));
/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));
/** MySQL database username */
define('DB_USER', $url['user']);
/** MySQL database password */
define('DB_PASSWORD', $url['pass']);
/** MySQL hostname */
define('DB_HOST', $url['host']);
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
// define('FS_METHOD', 'direct');
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );
define( 'WP_CACHE', true );
define('NEW_RELIC_LICENSE_KEY', getenv('NEW_RELIC_LICENSE_KEY'));
define('MEMCACHEDCLOUD_SERVERS', getenv('MEMCACHEDCLOUD_SERVERS'));
define('MEMCACHEDCLOUD_USERNAME', getenv('MEMCACHEDCLOUD_USERNAME'));
define('MEMCACHEDCLOUD_PASSWORD', getenv('MEMCACHEDCLOUD_PASSWORD'));
define( 'S3_UPLOADS_BUCKET', getenv('S3_UPLOADS_BUCKET'));
define( 'S3_UPLOADS_KEY',    getenv('S3_UPLOADS_KEY'));
define( 'S3_UPLOADS_SECRET', getenv('S3_UPLOADS_SECRET'));
define( 'S3_UPLOADS_REGION', getenv('S3_UPLOADS_REGION')); // the s3 bucket region, required for Frankfurt and Beijing.
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));
/* Mixpanel */
define('MIXPANEL_TOKEN' , '898c989d0f51000797c18113d9cb95b9');
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