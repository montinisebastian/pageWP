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
define( 'DB_NAME', 'githubwordpress_db' );

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
define( 'AUTH_KEY',         'X./1#)!{(%f]m.Xbm*A/%A=-yqPuk9M;n-g4?lz<5fsyd9qXW9NF}v#_`f,gHru(' );
define( 'SECURE_AUTH_KEY',  'L5hBDnk/be)UAQA`_A=DqCn=WwQ=Gt L[=c-2ACK1=[]DGow#4OXP#R4{9|n!nu{' );
define( 'LOGGED_IN_KEY',    'j&NcWHaa]j90uwpK39f|H5%.fk_CeZ-4oSk$P&:&8A-L&/L&(=;E%OP&g?4$}$?:' );
define( 'NONCE_KEY',        ';=r{8{B3tug[fKx~~agdIMnCG(5]h0Nn+8m3QU}snmRFhmVbKHC%&Glk538PIfk{' );
define( 'AUTH_SALT',        ';ZR.}DX`2X]U@|9(DU7Z{X{b0Iagrz:M^EEKU:vjdiUbCHmtNT]S<6^{Fr8QDT6q' );
define( 'SECURE_AUTH_SALT', '`/0+G8vol=?123OhUt}OR%TIO|~YCv!Lxk/_Mi_dS:*%#:9lB]yl2..I2x+*+uQH' );
define( 'LOGGED_IN_SALT',   ':.?$oLD&K]T{=:<eF5[e!,@?zazWC}~I=Ioms)$B+*l|#zuZeP>>?5[,ou+CE >j' );
define( 'NONCE_SALT',       'T-}S3JkySyY?p-oRa6k==:q&HOsZB$l*pu@p^YH4(aM6?7/eJSw:Q>1v,1o1v:Nn' );

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
