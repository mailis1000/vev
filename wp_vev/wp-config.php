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
define('DB_NAME', 'wp128');

/** MySQL database username */
define('DB_USER', 'wp128');

/** MySQL database password */
define('DB_PASSWORD', '8n8HS[-09P');

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
define('AUTH_KEY',         'bit0vbhcozyeranjrazavmaoc7n15ghqftmdg5lxqqgta4qzgkctxlmwawtcwdcc');
define('SECURE_AUTH_KEY',  'lzowkkvhpg77wdgle83eav82ivsv57ulzosp4bsp5vwb2f15qdvwacp3ec0pecbz');
define('LOGGED_IN_KEY',    '8vsbxdio2obrtlrc8i97r0fi9vloepqsatmuv28wh7cumd4usy31j2xycammpezk');
define('NONCE_KEY',        'u8gsceabea1pbenhatpdwz9urzjpjcqsntofxvnbdogsdrxjawo03imux2jnpsvd');
define('AUTH_SALT',        'nniqyvut8r7smfqjaofgqzkefukpnan0cxmrhu4o3b98cmvf854pqlekfhu7tmgo');
define('SECURE_AUTH_SALT', 'mexiheywzepa0nsiuqktwao6kckxlffsbfgf1hg4280rfcoruts4urzkh8qaiirz');
define('LOGGED_IN_SALT',   'mccqepow4yul3ua1zjkgvg5tvccibyqeoghdtxkc1ktxq0neydbfn699qwd9oheq');
define('NONCE_SALT',       'lcqex6qknb956wiqe0y7bnqcdz2dsx0cy4irqnym6dzcxdma2hguamoag7mzpcve');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp__vev';

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
