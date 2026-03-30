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
define( 'AUTH_KEY',          '`m%@cluzP*U|<#js.b_2-1qJ2yt<b$KT?fxPr8[@%E`g}{7%P#SrE(-DOj #Ju**' );
define( 'SECURE_AUTH_KEY',   'a&h^F2n@XJZCB{/K%g3e@]-msNR{z)6I!S`0$}N]W2]vC%@Tf5]53#dsqRr(p;gV' );
define( 'LOGGED_IN_KEY',     'T_Ee#$?[N{B_O4jN.HzkY)M!k2+<LoKli_^1(GVs*(DZ*.!=,3;Er`;Gh$Wqh<vV' );
define( 'NONCE_KEY',         'OTMe7<~p&Iz@oflvD$ulqq)ye9;`}qW@(6muA:=F}NL}cs2iU(xYc%wC/?ud]u@%' );
define( 'AUTH_SALT',         'u]z$f^<+Z=dN;@o243&Yyml6N|a/,uVnIW^e6P:lC=~V97D~xuoWvOwuJ=a>z8O,' );
define( 'SECURE_AUTH_SALT',  'Yk+ubg.h4BhrK+huA&DYFEI<[2ZVE+}b^xa 8ppNCY?wkk}2|P+>G<s=gUG^Pq-z' );
define( 'LOGGED_IN_SALT',    'myrx7H^kY%|]vBGTJkn&UUlC18/ou`XB< ,y]cP< ;,LO>%m6dH+NDRE3CBbLz(Q' );
define( 'NONCE_SALT',        'L!p]_u,}c=-n/wmc/)#.~v*t.Q(Qxd*jytj9Fp5{]Z*3hL} j7I70~4,7~fsB(M[' );
define( 'WP_CACHE_KEY_SALT', 'e5> !J_=q?O}iXc[Rtf aNhWn!in<@[f9+`gb1?8^n2.$D(W~Hp8}_=RP=cKd=N;' );


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
