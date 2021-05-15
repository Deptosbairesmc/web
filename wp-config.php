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
define( 'DB_NAME', 'web_db' );

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
define( 'AUTH_KEY',         'N|*#e4S=|-Om7VBIvQA}o$FtlKbq:tJM_kA:xvcv:j*ktB&]7gsPP~p!gp=jW]Al' );
define( 'SECURE_AUTH_KEY',  'lxNP::{MA>?r!}q-B=t(]??fJd!TJat3P&_Nkhil;T`}A9j2 J}P7@#v;ahQY9$q' );
define( 'LOGGED_IN_KEY',    '^jE%);?fw^c2hZYS-lP2V)m}=]f-%!aXk&2z3hxIFm=R+$i0kb5S.HGDt4>`h7fr' );
define( 'NONCE_KEY',        'P0LlawSj%ze&~znW-T4`D0+X.#)OWIs9sor?K(=aY9b2U~,?ddBR?*<$r$IMYJ_p' );
define( 'AUTH_SALT',        '?%#.1TmJI1ot;ZsZ4q]hO.l|jkCDh |;M`r[G_VCK(`*04bg:h3xX]op(m<i2eNp' );
define( 'SECURE_AUTH_SALT', 'N*?uCe_/hARYo1;k>w =|wzdT*xXu6DMI&FZ/o^._Et5#phPQ b[VpLV*,t-d<T?' );
define( 'LOGGED_IN_SALT',   'Cx00r`]. tY%uq32wN[K{*.%y1y61S@AVCS>E^&j<>[6/=e:~[-C5};8a~,8`j6g' );
define( 'NONCE_SALT',       'APK4;}I:kP0/.bj0#n|U@,KI$W%nP8U$1/qBtINE%E|::z;Ua [j#nP7l3/V(Y/z' );

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
