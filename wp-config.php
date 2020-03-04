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
define( 'DB_NAME', 'practicewordpress_db' );

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
define( 'AUTH_KEY',         'Iu#I)OCx[)6Is><Gb:c[MK Sq?Luy.h(gMEp0 [i#gB=jR-e_z3Q|~qF7xw[wCHg' );
define( 'SECURE_AUTH_KEY',  'a?jPtQ@Y6H?r(X#Y~<iMZgJF5+~l(yjzlg%o[Fqbopzr*Iz>hGS/$7#S|}*~9LqS' );
define( 'LOGGED_IN_KEY',    'ubo$3]2d?yG,7*ck0)VU_;iUg&)v+R/=VQpZabrkf%*4IeV ~9b]g_x3Hp4w:%Pv' );
define( 'NONCE_KEY',        'LwN89VsbU]`>(9]&lY42;8Vp_nw5J[@Dig/Ok7rrdLhT4w7a}0MD,q{K2a$X@l)G' );
define( 'AUTH_SALT',        '#mD^a1BY$Wx4TJ)VD_21r2J#5^(t}XsE)5x>Qyd]2ac6|OWhJJu(l8Giklf`i%]t' );
define( 'SECURE_AUTH_SALT', '!5{G9`DM*<#(OX/+jvR?p=bA3Y9MKloQ=,zAn/tCDX1+AxMLslR?oxq#^4Ye]UFu' );
define( 'LOGGED_IN_SALT',   'ofauCt;S@ivrLB^^Ucvh7Utm4Pt:iUy9p8 r;|j5~C.CaL?Hv-.a@396#y7A?H^i' );
define( 'NONCE_SALT',       ';CyR7I$hRv@Kr<s:ZQM%0ie&^M?ZJ%{&g`=B87Z![$zaXsci;N](<_[IsxzD.h=g' );

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
