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
define( 'DB_NAME', 'new project' );

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
define( 'AUTH_KEY',         '*zrHasA=EgQPNJvHPl8>:RM|P4jF9pfxo- I:7El~ie-yce;I|Po4&qY$3lZ_.(6' );
define( 'SECURE_AUTH_KEY',  '3y+McLVx%$V@uM1ME4aWan_[Cb+<h/sz?om**O.id:I:2hH#8Wj`{%tUN4?*34=n' );
define( 'LOGGED_IN_KEY',    'oXS=Dq1e2.6+&tE$ISAqcq uNNo~:c;`ZW%Cs]SA# $!RV&!r]DFPXm_q>]kW0Hd' );
define( 'NONCE_KEY',        '>w7[~ TlzY[vEMOJigU;R=~B_8Bp6ZNi5j>zPH)ZZcb@7Ns>Cy5)ysklHkuJ?gP@' );
define( 'AUTH_SALT',        'E<WPVm94gQJ>4kUr<6Op?!7yGBUCHuQT,Z?GbRFXZ_EP74sPa7,7<|w,.Hw~pD` ' );
define( 'SECURE_AUTH_SALT', 'fs5r/xn^$=B?kH9$6q{];]GB)?KZgQoMblV0xMt;``C6z!-+L*FX?wVkh&nwY-ol' );
define( 'LOGGED_IN_SALT',   'X&cn4N6jo4os<hiN-X|QJ~PoEB<}1_m_SJwn+D?EeQe:*|%)4x`IS~2CP0mNg!J%' );
define( 'NONCE_SALT',       '<Y[G/- 9+|YAo&WRv~KD;M<r/YD^_{1((0h}PbNzG=fAJi^K^&wXxjW(Wg$[CG~z' );

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
