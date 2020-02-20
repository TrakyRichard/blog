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
define( 'DB_NAME', 'monBlog' );

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
define( 'AUTH_KEY',         '?FzZ!#P@ |6NuC!&OX(G>FBxV`0]VY??(8v>6+@Wt4nd*_xY##UHA0>ZvnfE5|qA' );
define( 'SECURE_AUTH_KEY',  'd*ek6GP(`*dcHsGUw2JXknQ`#R.x5}a_e0VVVm;~;k:@ %=R+;BWK=f6B2/X#mB3' );
define( 'LOGGED_IN_KEY',    '`jp$T@_w{e`RWw8b6n8Fmu4,~>6GJ,Yy!LpQK}W)AM;9FU@HwD9c/95r8p`;*M 1' );
define( 'NONCE_KEY',        '{:j*5(6KUJ W_9]D[&AK^9H~-1[DQ5)c7dpWn%HyqC0Ni&.moqk25TpKEf|T.YF9' );
define( 'AUTH_SALT',        'LCegi8E@`Uocp<i:7z!g:6!a&mHNBUiAd{&Y#[1Nk9L1!_<;k7tHD%6Q2mH8s%ds' );
define( 'SECURE_AUTH_SALT', 'd[(G[YwQB:V-7@x9pVrur?ysHoIB[G+DvDHx9x_}f@O!YmUf}q /q[ko --X8>H7' );
define( 'LOGGED_IN_SALT',   'Z0fE|MiK+y}XpVqhXj&I<nB}@;i^osNRZ&&ZR:%ROW`[|MSc{.|_xRuc.=luPz/E' );
define( 'NONCE_SALT',       '5bC}4%YCSLx7o4=p#9,G PP*AQ5Ha{?:lXO?`2u+e e31bwKF<3;$x+sZTUeMNQ3' );

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
