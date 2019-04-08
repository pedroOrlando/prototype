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
define( 'DB_NAME', 'prototype' );

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
define( 'AUTH_KEY',         'A+O!FvL).uqg7N5h8Cx>YznUH:)#y:UWK_0V,WQO:Taa=$=&=&Tw5;#P$%F(&yyr' );
define( 'SECURE_AUTH_KEY',  'T2[p]*#v|0f@^7:a?rc;U%dulaQNu+9oH^(arfgegFSs$DjZ0)czCZC[}W[9/@P4' );
define( 'LOGGED_IN_KEY',    'hjTahvK3!IwE^+<@o3mED2zg(q#o,~6eScK#.Ggc9<MXgT9w{J|@aVsGOL*L{c8m' );
define( 'NONCE_KEY',        ',LdPEDZ,AG:2q-eGwSHhVFy:5BzB&.{;[MM.YQs=V[/>{=KCnv:1,ZlW6uJVr [&' );
define( 'AUTH_SALT',        'rED<{ jRF-mypXQ<sF8++!g4yrA>m^-BJ |/B=sSV1{Ab+Y`U_{QG*2bZbFsm{Zu' );
define( 'SECURE_AUTH_SALT', 'G>:[fw@v~qt&!{V;Y<I8N>3Vcqbq:NA0zua[|pXyMC2,&`yyFRA4EUht??W |@]]' );
define( 'LOGGED_IN_SALT',   'z&(!G;f?8+>iL#x, K^A-v&EP`KTT Y?T$>ux1cjTdzKvnN<L-wW?,FO*|H1HTSj' );
define( 'NONCE_SALT',       'cxgae/4/V|sob!:kq|u]Rf<-FR4qZq1>R&NhZygFmS^M-P^4a}}^MijslWda^|.9' );

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
