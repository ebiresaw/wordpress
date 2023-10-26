<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<Qs0I&g<p}g00t_t,3[MajmO1}gn<;<tp<gU]scHvh87S.]]ax#o@tx}4?i <n_w' );
define( 'SECURE_AUTH_KEY',  'vggX-.)b5kqz,nS0*&#C.sQ=9IZ~ @q]y] ]Y<>vvbZ*3Sn~bcKyHk=YK^rcKhXO' );
define( 'LOGGED_IN_KEY',    'fv{LRys!t{Qbe&5RFB.qN%@PvKX~.sJ[aB4H#xWXZ/iW4&b]zGh^iwN}kCjmppVa' );
define( 'NONCE_KEY',        '$:3|lO%n[4AHVAu[kPL _Bz_H[K%aV6gR5?@18wwv%lI-gQ~1$aqZ5 (oJA?o5Bo' );
define( 'AUTH_SALT',        '%/z3*ux5Y`4yxGIzrAwp&<ao}m|?|;oJ)GX (.Nj@Pza]k4KrrsT8PU#w#ySdGVH' );
define( 'SECURE_AUTH_SALT', 'AJs>(X;w8d*By,<jqG/,+Odu{|8JQ{Ks]OawVPt`R!O]xzZcRC13s^Zy}#gbw>51' );
define( 'LOGGED_IN_SALT',   'YAN/)hgCnZZ!~`*=.b++X/{]%_DetDf3ie!%c%1;WZ`b@2*H<vVB kv&i6<W#y)I' );
define( 'NONCE_SALT',       'XolQ4u`JL^<`1^xCjecQxz {[/u?.p>U7|LQ^HN[~4vU+Q}zT^5tu{,X0hu~8<<o' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
