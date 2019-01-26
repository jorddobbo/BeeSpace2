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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rOYOmlVSomoA9M5vdrLoOLjTvFQTGF8SQoRrbgkcSBZUVfOMNTexcxrfTDYBXAeYxnApyZaDOWTK/M8R04i8KQ==');
define('SECURE_AUTH_KEY',  'q20OrA4lp5Xu41rmgh4+OwaMYy7sVPH92wfBoJhy6aeFRHVPOXBt8oaychB9miAVwmX8sDSfDQA9EE3UPARmcw==');
define('LOGGED_IN_KEY',    'SbzX95BIvwamTi64aEce/X7XEKxxhmdv3K5bW18+XzU+fyJGnvDVY/EQO3hXc0Cu2Jl41O7fymg6/WPP6GT7cw==');
define('NONCE_KEY',        'NrijoU4L4ELc59dw5p0HjSkVNQNir7eK7bVXca3rZUGfKGYo6OwaLjoIrFKeM5C8+Kny5qoY98Zd3F7QCSaz3Q==');
define('AUTH_SALT',        'V4zcSoJIout1TSdh3YrZSFCBCxC1AT1yZGOnLrIoT3Dd9haCHqo0o8rnbm63Wtr7g0lKCKS6in9Gc2Kj8aAERg==');
define('SECURE_AUTH_SALT', 'bWzYAkZGEqLIENiXZWXBD0IExw5g3tTSfIKJn52+Uu9B5u+5Rp4JSt2DeekuIz9kTaAbiL55ihoLwLGoD6Ifmg==');
define('LOGGED_IN_SALT',   '1KcSxfP5yTYcjjtiteIo2OA0ZdOKGbmkU6e3L0qZdiFcYfK2Hdg9u09sDZl/yI+Ua1Rko9v5OlC4CtNtIIQOoA==');
define('NONCE_SALT',       'DpqmLsenp8zBgIcGPDg8RQqE1XLjlZs/wS2yzfekTFTkVU1Hvm80nh4UyFDyt/g4xqlmJ1rMzbyNkpD0QzLHSg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_zcdwkcpbng_';


define( 'WP_MAX_MEMORY_LIMIT' , '512M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
