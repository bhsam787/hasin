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
define( 'DB_NAME', 'hasin' );

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
define( 'AUTH_KEY',         'H+wa|HhneHwvvY=bPKbyQ3U5t;Neo}8>Wv1#erxXZ?1;_[TMGzI/?4t4`Ohn~{J+' );
define( 'SECURE_AUTH_KEY',  '&eTHs6@(e%{knU<B<e$-#2){Pia ,~Exd612xyxPD(<E{MJp*sNT$=439:|:jiHS' );
define( 'LOGGED_IN_KEY',    'lP{QdQ[P-iKQ{UF{+) 14s>Fle^RepD7]vNWGPN|H=(5^~|eA_u.K}%`uX{ZlS!C' );
define( 'NONCE_KEY',        'u-?)IK.q4@-0ge?Tw!KxU+<;QW3hqqKrXSLpqk;IV[m)[_@]^5?C=KzHHj4g|ZmQ' );
define( 'AUTH_SALT',        'z9]kQZCl[?_1b42t/TmLxxdAOL8@TlYcnEa<VMEPTt[QkoK55N;cl%3nvHDr~Q;5' );
define( 'SECURE_AUTH_SALT', 'LqbZ)MgShF]w<hS/%dHtdd3,_8 #>rA4LT`eV,R F{[=$pG-S( =OWxiTIs8wKk$' );
define( 'LOGGED_IN_SALT',   '#Ruu-+-jAX4D?AbYnrICb]p>b!0uMAb0w.ZLTf (>,4Ppw61)/nh8n2CDB4^A&aF' );
define( 'NONCE_SALT',       'H@_3RZ{I~f3!oOCcqJfa%g2 .&=K6kr[bb1?o#?><n^;8r0mhsh<6rw,X=Zy?UxH' );

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
