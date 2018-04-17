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
define('AUTH_KEY',         'fm#>a%o=g7(}f/C/VQT?O~N+3>c}eycJi/~#t~!h;[-?0-gxxB7|?K0wnFX_d9cp');
define('SECURE_AUTH_KEY',  'f%H|7}<[+@e?!:V#s-laFGYQBAK9U-V`(,C{znLZ5tnX*v^1`SAE3vcw%s^P]A?}');
define('LOGGED_IN_KEY',    'm>kj ]l:kC?3Xb|g%2{~i]97z?xP8y8&-`hk-#m[guC%kcsGc|i+K;*#-2WoZIZA');
define('NONCE_KEY',        '.:yg{q+hVJpDWvX8p[EWH)N77LkI>ftR+$Dbv@e$m,BD[CnVjBuc/+%1gZV`G7FK');
define('AUTH_SALT',        'TUM0-g-2[Y9@otlKsydz}HER+%c^Cifiav3oW3Jaifz*$87BUQw)1!_7s`XtOP~o');
define('SECURE_AUTH_SALT', '_DR!oBh0+~32r(5)`@(tdj<A+(%~<AzK)jIrdrJ(a3Ddd-=?Cd6]JEHe,F[[1hge');
define('LOGGED_IN_SALT',   'Zr3+YTvg(0d/wQd$46kUpi@sc3UBp[ N;EdZitIzF8U++d|EY}So:).I>TET0kY/');
define('NONCE_SALT',       'W-cr!q^zitZh~F!`NJfywc!#z4X;$guKq<F}-.4s*2}6~9qH-n5b#EiLUxm;uI]g');

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
