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
define( 'DB_NAME', 'millennium' );

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
define( 'AUTH_KEY',         '|~xyG.hp;D3p2($+*dEk5Z~IDvuR]8)Kp64>:.U1eD9p5~3W`+afIWR&G~7n*=Ai' );
define( 'SECURE_AUTH_KEY',  'r<<`NjzNHQ?Zc&Spb.v.)LeE$fcI7?GBxewZt&dqzW9iq*)-%eA/UImbI+8f9V%]' );
define( 'LOGGED_IN_KEY',    '9OX>fenVo7eMxR4QB<c7Mg/GF&8gMKEu7{ZR4wayRj<[Q)9wbRwwQ9~AAfgCrvD^' );
define( 'NONCE_KEY',        'Aoa)+y@5d.W/MuC4~~|zKo<))U4<J$q#gT]vDqAFRs%52r0DJd2uJ:ji{BI,_V3B' );
define( 'AUTH_SALT',        '%96Qju;s~&hd4u=iok2#qxj]tfsBkr{uU$=kv`/Ye/C O;Oipq[mnY=nzIYg9g( ' );
define( 'SECURE_AUTH_SALT', 'u`X^%X0b*xu{{#:({*;KH$n*B1t<SDnL7~dki4%Ari))I]XYrz)B@-o6&.%bBo,;' );
define( 'LOGGED_IN_SALT',   'MUiWGzpZp<)RyjnrAD=9=<InIT<0Dxid-FS]Mm8d*H/Ys@@HM}NGNU`A+pq|~XYh' );
define( 'NONCE_SALT',       '<Ra%(qM%XSA,RAXV+EBCQ$q7C{hU?BHt4v:J(nW*scr^P4r#E!m8MG&VT!lu6#+`' );

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
