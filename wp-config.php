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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'EVydS.^xF{[#$)cX!Rf$C]@&Y+iLChVpFA8r`%F~5?UC_SGMkGgZR{KM7>H!qbQ<' );
define( 'SECURE_AUTH_KEY',   'uGyw(iD-V+Y*U0m>y?,R[V!cui+/*@mq}O$z?k6{Pj1XxS2_*ju0/hvCZ~e4OG`B' );
define( 'LOGGED_IN_KEY',     '$3d23)*0.oXl`NW=TfjxEG%swkMO{-_iV6(LaJO?vg7d$`grOs!HE>y9&&62TO?q' );
define( 'NONCE_KEY',         'p~Z .KEyN/$6F_pUeCgkAG&9n.0L]5l_ (<96RMq &e6L[Dki$9z^C(ic/yHfy]o' );
define( 'AUTH_SALT',         'aTF 4[}c_^W]wq}nJ.Tro4pW{]Lc,S`Sh5Z|SJ7Iru#GJ*5&eFoE4+p3S{A0Wd]j' );
define( 'SECURE_AUTH_SALT',  'zaI=<-!V6wHuU9iM[rZ(8qI.;$io:qb H<H)C-K:c;F#He)zh[CFcO-W_9y1gWYD' );
define( 'LOGGED_IN_SALT',    'jOm!w8E=U>kb4aG:L1z`A;_ZJltq _du{99,M:Wu_XVsEH9wRb-]3}Wtu^1zlu @' );
define( 'NONCE_SALT',        '-1v]zA_A0BMQV5Udd:SR*a ^4ieRi0U*8V!K;Q?D5>>Uw :K+_h~G?0N~q.|qq^e' );
define( 'WP_CACHE_KEY_SALT', 'gFNqn!-Y*#:.Fxo<>+k;1AXgvHb9HVr?05~<3A:V6:<v3*|U&.CJ/TfOM)yppoT$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
