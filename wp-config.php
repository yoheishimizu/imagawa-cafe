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
define('AUTH_KEY',         'Kfs1oVv/GLtF38Pivm9icxOPla3k+v55a86514mjJ1DgD5k/YglkyLkO6uYvn45/1AIp3nwMEiersd2QOlLNsg==');
define('SECURE_AUTH_KEY',  'gKPelTjovAKLFnoaiI4ogD4rfyVrAvVCQlsjkeAJOR3VqOvt01eopvBOED2K8+htu+nMrXOJ7ydGcH3od/rjaA==');
define('LOGGED_IN_KEY',    'O+ENqxMIpaACENWddUYgUZmnOqhlnTjBrhlSbr254PBviFiAQIbVzxmAQ05FswwRI3prC2GhI+nJVQj1lKQhog==');
define('NONCE_KEY',        'fLka4neUQHFOMHoSDKnMczRYeBtcIvb8ia3R4/NzBmewWSgXlmhTLmhDDPDYROrBiyHSZBRin8ZTF10a55X1fQ==');
define('AUTH_SALT',        'TKVAjVgUhN4nE2fjogvtoWSATd57eloQfMAmw7KPfIVvY0vCFb2eIfZODL4j+caTO+qRIZlcTNUAxxh0AOHQ6A==');
define('SECURE_AUTH_SALT', 'GmINxiFvVs8xhg/nfFTjRucIiF5Q/mZxqQUcyV4MOzdWXqdmOnzPJ7nezXoq51W6lu3M/HN1MGBGN5fb3dKm5Q==');
define('LOGGED_IN_SALT',   'y8aR73Xyl506QMYPpXazOiiwx7W/RCR8Wmlcrg7CRsnonWAedJow71gdJBFvpyCZzYKNvkzGfnPuWrUSqdcnpw==');
define('NONCE_SALT',       'VeK4r3CS9ckM4LHbvEZ/BcLmr/qc6FnT4crDPcmhym/sEWdpwLDo6rVNU9FRWKr6C9na/OCeIQ03PYh+VVA6ig==');

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
