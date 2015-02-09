<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'typhan5_wpnice');

/** MySQL database username */
define('DB_USER', 'typhan5_wpnice');

/** MySQL database password */
define('DB_PASSWORD', 'YS-4)1V6Ph');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'cuymydg4zvzq1ctwgqsirfsuwvxkmnyr2nq3ts66fflpafowioivrp9frtlby6v7');
define('SECURE_AUTH_KEY',  'p1qoxdjfpnqr5errngnnyqtldfuzmes2yy8t2pbfhgbyhtvheiy40avrk8zyij14');
define('LOGGED_IN_KEY',    '639dlo5mxaxpzj7cdihabjxu89obpduf3kfv24yv7tjc0ejhecyeu5p1xseryuug');
define('NONCE_KEY',        'ypc435cczlzhuzfkqsshiax31otlzxwdu238bhn2ugzpgyeudqbf5zhznw4acakm');
define('AUTH_SALT',        'lasbo3zary47lwf0cn7yrqwv97a1mvcmtnznwoxlrwcxjyx7gq0aqieoyvhnhhcf');
define('SECURE_AUTH_SALT', 't4et5k4vjft02c5zsm0gsshczaperm7m006qu9hwnkzo0vyfv2nu6gozdhgjnlbj');
define('LOGGED_IN_SALT',   'ooz0uwl6ywdhhywsk62ja5nfuzzfyqnppfiu50aczrwqk64bt8ssxdjjzokn48lc');
define('NONCE_SALT',       '3cx5likb9e5kvxoewccv1pogajj2c9dch58azmbwyvngy0vy1uneytywpz3yyxbg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
