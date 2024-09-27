<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ',}fyx@$4D-||Awm#JK#;)zD^lR)E}c(GS:c2Z-oiz6ql)v#P7|tnqt4vNJ.#f,kW' );
define( 'SECURE_AUTH_KEY',  '#Ugc*4*sb|jx?S0w+w2jIA(N|8]AF@4ik`9Z6% 9hYolKSjjQ8tSIngfCWzAy<Gr' );
define( 'LOGGED_IN_KEY',    '_aVv }.(_9RrdMn4y@ni@l;J.EN^d|*@J!,b.=X`<7H^z##jIM9CHzk_]^o6)$FX' );
define( 'NONCE_KEY',        '6#(-9b)L!/SC0W2yS]E%<!iG|~%;tbCB*Bgzl5kxwhjlf?n.~6dH&_1uP3}nwRek' );
define( 'AUTH_SALT',        'Vj n]8hd+j@zW2(TR=BP0&PB;y9>jPTDhs2&m!Ld9G9/6m j2W8[/3bxrC2wJFIG' );
define( 'SECURE_AUTH_SALT', '?Qns1+p;=@?Ji86doj0L<L{B+u(L}QziRqc1KsnF`r:P/$u?1hN$-?.8*{_t~ks3' );
define( 'LOGGED_IN_SALT',   'hc`,E7M@),`dry~uF^$xZ:8?qv{1N#Q-0$z:|C*~C?/W-HgVXvmEZP.a0)WbKI*7' );
define( 'NONCE_SALT',       '5DV>A9pwb&o-.sNR=&&U ,Dg?:B/=6Tv/XEI]BN}@*3Jb`8[ow>RYaq?,Rz6|c-<' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
