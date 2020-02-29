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
define( 'DB_NAME', 'wp_stageonemag' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'imb090503' );

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
define( 'AUTH_KEY',         '1rOay0u/B#@17cEG:%sK6u-Il|?K%iV7xf?YGn*AG&6& ~<dK:uUC+@2kq]gnAlG' );
define( 'SECURE_AUTH_KEY',  ')G]oG8?z^EX?NOYkPyhtt~]5*Rq,N*>~>BW3_ZA`}(e)HFFi_G9Q.RF>j[3g:~vm' );
define( 'LOGGED_IN_KEY',    'U=&Y%dRuJ,=CAX84,0?IFCT}sU^~4Zxk,vK:_M5)&`Z{/xNK32-gu8XEdM?N=NZ)' );
define( 'NONCE_KEY',        'Bx*`QTkryX$9tvHW|VykyeO9PUW/5K.=K42xVdoon{c5ES6D44j+{K`o3w=Hm~J)' );
define( 'AUTH_SALT',        'SfD1#i l()5*G~K/%2o/QdQaH:7K1{*/Wfs]mYMvq;*,9Ix9=k_d47|zzZi*GsW7' );
define( 'SECURE_AUTH_SALT', 'R:E@rpIMOK:.Z:5ZzI[{1%|FcN #|o|:<Jw9U||A6t,6QYI8Ry,i^^-cp.Y4*:Kf' );
define( 'LOGGED_IN_SALT',   ',z7dW>cA{T+z%M(VBzD~(=rDv$>w0gRd&3RY}/*eyAelwhJd:&vvqy-T{D3im;C^' );
define( 'NONCE_SALT',       'GN[a{S#%QW_FNsftr6qiyo>#UA-9w=g5FU@[?O`7x5Z;$3Qc]9S8xb<1j@W+OuZ{' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
