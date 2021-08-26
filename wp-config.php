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
define('AUTH_KEY',         'rehzv/KmjOxLLvLbtlNw/GGnGOyvRoVfK6BkWOgd2BAIlHCCDw8AJBfNfqHq8+cpdTy+xzowkwddQ8lztKM05w==');
define('SECURE_AUTH_KEY',  'FKF7XcGlckaxteIRd+5Hm4rOTsL7UGLpCElJ8+XbDhsIrVk8pwLYbESrUTZPshXGBPd3xr6iyFNfzPgljWFIvQ==');
define('LOGGED_IN_KEY',    'KjKR0P8HIzaCPlOPltjCrI4xCwDH8YhDNmYBg/LPewVbAX3KHSeQLOvpMVOGbv5dKB3Owy3pxQ6s6gCfZW2i7w==');
define('NONCE_KEY',        '+UzW+vpnfz+Y7cmsZujYNfNgjiuLzgqLaOb/jVgYgAHQFo+Lc833AUT/2z/g618duvnqmnS+SDtWXs19nGuBMw==');
define('AUTH_SALT',        'cvEQx0ArJYwRs0Fbus2I+vzPxRMZPLb6U/GQeLsn288ximu2uUZDtYjuIc0dxei18cRc9fdjiEhtzcfDBfHQqQ==');
define('SECURE_AUTH_SALT', 'pzSVd2M3pI7Eb5+VyTmH4+Q2chFgHxvuBqJ/IYbvpoQk0RmkL62SvaMfg05PSXIfofyzn14wWj9GsWA+oeTvbQ==');
define('LOGGED_IN_SALT',   'nZRQ7Ys6sMbk4RHE0dOqldT/vDbvBtvPSZYMTa1m1RtxJo9AwUC5h7xcnyLLP43wEqvIlMU/0IDLsPfZWP18aA==');
define('NONCE_SALT',       'cwjlcxd+t/vMdBRTLVQwPQtnu6ivQBvyhiStLfHJGm8GclaIb9imLBJV9sxuNTiyGXu9exX0PsRYQFDVIrPnPQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
