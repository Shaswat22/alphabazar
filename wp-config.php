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
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Yf+#0]l{m]GRmdDy%d]%^Gi^?bK7kQ-]sigU3GF8//5Vz;n<* Un`0; r7cp7M?b' );
define( 'SECURE_AUTH_KEY',  '@7D |~ W8e+))~D(q{?Qhm:/:`+EL4Fk9}weN6$usN#V(uFSIzs6j{}RP!U/=,PF' );
define( 'LOGGED_IN_KEY',    '67B[TK[gqnXaa2 q3R7tS<a*yz>@[(|[8I^UQUsy~B]~qFz(T;!(Mp#*ppj=O$&.' );
define( 'NONCE_KEY',        'e2w0DVN&k_#vo3@OL!8g?4s#tB)v//{GIqf. %WIk9SmFCyq9iTn7zM0jg%?L<Nt' );
define( 'AUTH_SALT',        'L#k^Wlq>)6IjMXS]1=7Cp-$LNGBw,m(,;XCQ*zhP62`FijE-k/Adj=ys;3m/3GEo' );
define( 'SECURE_AUTH_SALT', '?UkrV^_/fM~`GA@4t8wO`/?+x(2BeF(6_1hjK~ivxjCl<<Q0Nx|8cZAp{4u[B;n3' );
define( 'LOGGED_IN_SALT',   'H4)lV$<i:!9J7{}? oJd2A>*4Z{u3x&*z5+)Kt.Oc0T]%$23^(KHub> lS/`ZlCR' );
define( 'NONCE_SALT',       '%6{&Lo@S]4PrdyB$DCCvSWMq*6&f+W`+Y.#y)x1~TkqG[{HqL%E(K5O~P2LFrt0t' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
