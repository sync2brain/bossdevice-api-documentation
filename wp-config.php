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
define( 'DB_NAME', 'bossdevice-api-documentation' );

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
define( 'AUTH_KEY',         'W:{Cd81}E`)b^txSsi5 ,#I?!]?.hqPuR~j-|y,b>ba&8B3<~+`yF.u}EOw$wu#[' );
define( 'SECURE_AUTH_KEY',  '}ErP,aDh>8WSpG#@,I4 C$(BKwE>V,s7txVRcPG:_;+f|*jXCqJxoR>r-V$!L+:v' );
define( 'LOGGED_IN_KEY',    'T BoS`EQRB,DRt+WuT[~jlsiH@Tn$cyx&Dn;urH}Np:ofhw%=O6XC;BL.}E-m8=(' );
define( 'NONCE_KEY',        'DRiN!)2sPXrVCTH%uUKt%RXiT6)L0d??:>?WFx-puyCxsjl2qb#P0ItJDJn^2}%k' );
define( 'AUTH_SALT',        'T|a/=/BksFshV]d</yaa*c[xepDI6k`ThwG|_r-4<_lDkT2Kppev]07aXabEl[8#' );
define( 'SECURE_AUTH_SALT', 'WKxed)uM!jXfeg.(_%^[=otxbh:vZ5)BL2?wPS~.?_PgzCKw< Cf8aIQ*BgaJ`O*' );
define( 'LOGGED_IN_SALT',   '5wfenugDkqky P_q/V<gdV98e}s;d/j,L2Fnp$u>vvgR1-L!SOiGWtT(y5p{|a@Z' );
define( 'NONCE_SALT',       'P8F}7*IvmAe!~bre=c!Z3E69a?Wj RHD`^1*;HgrR$b-tiyax`Xn$?YW/tr?Zqov' );

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
