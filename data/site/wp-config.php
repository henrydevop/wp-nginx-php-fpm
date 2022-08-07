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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'rdNIf*7wBkln?}eZ:pr[BzRY,_*W;P,&|zbLp_7=s63sUvBa,y-d2F_uq&i+VlfZ' );
define( 'SECURE_AUTH_KEY',  'ncG!%V_?LA#^:$#pYOjyt$<f b}]ctnQgemo+!H&x&TZB8<;5pfJwnyjy}^+A3$f' );
define( 'LOGGED_IN_KEY',    'jVQFbX=_8UC~KQUxnkFN3sfb&R(}7V:Q&X8dFP2w1F7N(w 1_+p!D^*Ir% XYhRn' );
define( 'NONCE_KEY',        '%kgmz1=YC%r2unp9FHt0GTe=bl(AC6lR=m#U]4 h@kwTCA!S,nNleA~s+2kg2$Hx' );
define( 'AUTH_SALT',        'Y?TQK3cv3vSZMeVw.oeojbK27}],r|#f#;_.^.XuxCfne`]NfKb)mb8l=X4@[4aa' );
define( 'SECURE_AUTH_SALT', '3VP@E#5[#$qtS_FS>,v(L69URBS/d2~_~K7VR06T^}SC$86^E-vfhu<~v2K+`-[J' );
define( 'LOGGED_IN_SALT',   'Hs7gnX9#j8KnU8OmgzeI[X}p Y.^xr[*Db(F]*${8<K<0vZH?U(U?Ljs~t9x{,@m' );
define( 'NONCE_SALT',       'so:4I^}/Lcu~!L!@f>c!WY!`a|x)`BF6m!z.-kT=9J)SJ9-&DX0&mo8%@^Y7g*Ck' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
