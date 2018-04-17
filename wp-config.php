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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'c758mkomqx7o2kd0' ); 

/** MySQL database username */
define( 'DB_USER', 'q4vs1hdre6gepb14' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xcgk54jvumuttvbf' );

/** MySQL hostname */
define( 'DB_HOST', 'h7xe2knj2qb6kxal.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
//changed here hoyyyy test   rararadadada test again
/** 
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uG<eR<F}R_gqf~U_d t*7pk{9Tj2/9-(8CQ9A[|v5D+4fk##_^;p$% ,@VVl,&G/' );
define( 'SECURE_AUTH_KEY',  '%/F$]z7+>z =`tByP=DR<g{>;Z@;,/3Fft2+Q1dqNGjltSORROe !.+FKS9pa-z{' );
define( 'LOGGED_IN_KEY',    'yK-9c?VSCi.#/cZK&BVj%nZ*1PBzpi|/M8F#GH*ql4A{w-vDb,,kz y8QzwD6Q`:' );
define( 'NONCE_KEY',        'e@IoXzHUE}=S<VL=:VTp(y;;h@y}Yz>@{#7LCV$kDG8}zT:i~)!C)]Grf#~h!Ruw' );
define( 'AUTH_SALT',        '1+$0`<2eni6#$n+;LRL-]MV{SZ9)~RB;4?ks/Vc$$XBas~gQ(gP`ld>=T}Fj@h<6' );
define( 'SECURE_AUTH_SALT', '6Ff0Gfq%r^H>uc6L [Y4J_>&C[90h^^6V50.bWPy&3ZysZ_9p]:F5XR7(]h{S{XT' );
define( 'LOGGED_IN_SALT',   'Y?LdqVNg0>xc&y@G6HjU!]%awk!7bx 0,yZkr*qX?X*(mu2aZST70lYYckYf+Rb3' );
define( 'NONCE_SALT',       '7#k#~GTBXd?+*M3X*cd(l/Zd(vK+bGfe_c5?mLN|A!p@0g2ly4DOzq.;TgS5,UvY' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
