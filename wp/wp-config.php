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
define( 'DB_NAME', 'mw' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ';2T;oW`xQtt.8,//VLF{@h_lr+N~.cwIw+JrW}cC=>Pwj&Ua.ERFb#bvu#.yg/L.' );
define( 'SECURE_AUTH_KEY',  '&7W$p.wphxI|ndQS!dvbjpu%Y8LcA~5aviSb{k{=8 oO9( Y,xN>Zm`a#IU[*vZ<' );
define( 'LOGGED_IN_KEY',    'tGKh;YEd8Gx(`n`N$:o]E01%~l`~jS$&GaQh&5QS(g;Lx--<NnFJ^2s.[]JP]v})' );
define( 'NONCE_KEY',        '<wR{!+P8n?_gRUO;^~R&^OA S=U6t8_ u$Z!hT<u@+,ro=T,}-t T.:M;WiX_jB#' );
define( 'AUTH_SALT',        '}mJ2v^Q6)n|]f>]cVGShXjrxa3hV: @T;k&_!=p0DKahnW ^>9{k6[.z1 ]$o!| ' );
define( 'SECURE_AUTH_SALT', '>6V-RUs|q0(%YEo7?J ah3Z;mX|{cNr;.`Mi&oKfuD]6Y,74O&4I)TFBI)$)`GP3' );
define( 'LOGGED_IN_SALT',   '{YT9pGte~=T#s;0m^5jGvrQuL]Mf&J{>Bo41)Mj z Fc^6cO:Hcezk?MFvvHjkPH' );
define( 'NONCE_SALT',       '!k{n};%9?7>A/BfAeD6O0ZEf1Q8U/$ *$qa!+0#0=`qH$xv1dFIu*YaFmHn4R;@1' );

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
