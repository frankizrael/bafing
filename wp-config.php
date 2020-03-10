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
define( 'DB_NAME', 'dc_bafing' );

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
define( 'AUTH_KEY',         'Cdgs##^qjp0!^Lud$#](zJxD;UWk~;V.)E2U ~z6R{M^_RsdDefm+x$SJ~I)2<bb' );
define( 'SECURE_AUTH_KEY',  'y?gwsJ>Z%^Xy`2sGLW0>ol~yDid5~q37HYiX*0M:5Ftx$?Zx@:1rN0b6b!VJ5HgF' );
define( 'LOGGED_IN_KEY',    ' .l}Vf?V#snhJY=fiM,Pq-e;wc>lh)iHCoycM*ietyW?v+Zr):IApo8kv,QTKp!~' );
define( 'NONCE_KEY',        'y&+SL2hM;7// 1u^I@{mPqYd,Qp+b8XUuPMX!3iHwVK>z?dj@jD>v=_PvU 5iDJX' );
define( 'AUTH_SALT',        '7p5lsVEwq0.Y^&R0:vAhkw+j][-FrSWYD~<c641s#4)WqP1KJo2&`TIcRm2v;=GP' );
define( 'SECURE_AUTH_SALT', 'xIyw>pjZg-ci^b#&R4 ?hoS7kZ1TBr$P[pXlLqPotWC[L@_8v-pwhLW9sG2!;TXs' );
define( 'LOGGED_IN_SALT',   'C^Q@y!4.mRym#&m8<T~+Gqa0/U=0ju*g2iR8]4#yK)hMCyDNp^;%byMY6wVYhiX_' );
define( 'NONCE_SALT',       '_/u/AfZ[^T?q]&2q*XRX0?a{;gkP#DNNa$6X6XcofPx0l1XI$EIZ|DrL? 5Sm,N5' );

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
