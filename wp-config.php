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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', '192.168.2.11');

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
define('AUTH_KEY',         '6TLCp8i;Mk-Z{T%%yt/)J!VOq+`})[6h1vC8A;O?T!PN^*$2rl(-Q2ruPGJva)r$');
define('SECURE_AUTH_KEY',  '[m8x55T=4!P/%9fBEW$TD_E+PNnFpi/<Ce2luT:H^V)X#288/_~8h2ywJev&5-|g');
define('LOGGED_IN_KEY',    'o?H}44alWk,=aa*[lRnr>uK/O/R;l+Pf%0n8=J, }>h#(?Ic@B&=`2>XEy{?4[g7');
define('NONCE_KEY',        'b{Y_W<G774Fp/4p[}>#GEUC8_5?`F|EBAjyn$.rnP+?9RMsiOjr|-ikOQXHVg[15');
define('AUTH_SALT',        'X)J8#|~13:7^*C6KwiBLBt%B1eA?%Rt?u9@`NdKJ Y2,P-umIX)[^ibxm=>H$qQ[');
define('SECURE_AUTH_SALT', 'M}^6j8Y2uFf^V$}{^2z(H%1!Sc|ph0stK.JCdgs=~ho~k)w5:IkDx@He~J[2xs{Z');
define('LOGGED_IN_SALT',   'NlM8O4`~8?*/jGIexr+kVx=R{^oc$S$&>FJP9rf6kc![d~wClP6A+o73az.jC:6n');
define('NONCE_SALT',       'JmScQ)cFX},F;()%BHSaKR)5N1Q`>G :iTK9hLo8vf42lidySEFiz8Jm@g;Ai^Q8');

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
