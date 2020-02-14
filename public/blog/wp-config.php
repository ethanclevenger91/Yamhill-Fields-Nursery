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
define( 'DB_NAME', 'yamhillfieldsnursery' );

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
define( 'AUTH_KEY',         '$X`{~C)=Od(0!OQN?.(%U O*M<u}|d(;R/@b-P4AB<A~wW+_rOJ:9?X{!o_ejk {' );
define( 'SECURE_AUTH_KEY',  '@qq,}Mh`kF`lARf?nt N6P[ap7!k|SO8#h%*MEeS-<wNq+N*-<Qo4MT&N>bZJ1lB' );
define( 'LOGGED_IN_KEY',    'XeQc W:mN$MC0_0_y^2?h?v*V,I7,A9r9 AMytn,J iI[/EAnI^$>7.;9kG$c)!0' );
define( 'NONCE_KEY',        '69sqpC}h!$P*~U$JYP*Jndbx,=8Ac;aHN#9A3l/S}95YiT5Vye5bDQezw`)SvArC' );
define( 'AUTH_SALT',        'tKhMn%J4Ys#_T5t~b[YPHT5&])<Zm+Cdhj`}jGF,ScorLLok:RxMOijIw2M?r,{j' );
define( 'SECURE_AUTH_SALT', 'I {Acc7q.#@S21L?Wwcjky+}f>sGhtAnTTGUx`fTyxI#k?F&Gh-S813zhgosD^7$' );
define( 'LOGGED_IN_SALT',   '5Wz,iP@_;#/`H&|]J:A=Q/t]U`-R&>LC^s w#I{TZF)&XHp%YG=V29nI&D,#}bBk' );
define( 'NONCE_SALT',       '5gghq5*))1ITd_d8p&.U|hV`^9Uq|X~$(!%#2-Wnt&lk-a`9K5z<.;4fp?*cI)Kd' );

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
