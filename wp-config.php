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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

 define('WP_MEMORY_LIMIT', '512M'); 

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Rana_95' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^O}9{#d1M.Rp:g[a]N%p_enKZj)5#eftdl=7RH%7R#QO|17_.m/cgu9}(#MQb~3A' );
define( 'SECURE_AUTH_KEY',  ':0I?G/M/P,zX/N;d8a?vyA~b:b<3mhk**,/uHW%zwZ~|y&4kdV_LTyUIWBB9> %$' );
define( 'LOGGED_IN_KEY',    '.2nn!@4W[[hdw5c^VP}Dn=LrNfb5@fg>ve?:iVjYA:RAS*A5YVvF8j,^my q49wG' );
define( 'NONCE_KEY',        'rt%Dd]P%:GB)@k^:NBd;R}4E[E}^CE&#kB&zb!u;M(py.eoYe?jeU}`.!]H1yHY7' );
define( 'AUTH_SALT',        'fM020,isF${a$VaK/uNvnWf<2sG@sT.esaX5tYxiP+V|3ftud5f3`o/{7D$IUY}]' );
define( 'SECURE_AUTH_SALT', '<z/HHweMO|GL8y+fskH8%M|XZ:H|#7).wm=qb=jKs>ZF<RR?KC1UwQrTLng %(H;' );
define( 'LOGGED_IN_SALT',   '_oF5.5h,(S ZUeRUa793#+Y(C9:BcD5;H,o5,&+Y&iLvc/0mb`HK0eZ9inoQ</02' );
define( 'NONCE_SALT',       ':=J+dQ]}D0ykxZrBCn-0X<thpzppaNvrTdLLvQw>5|+e!Z.+v3b%6U4d=9*JglLu' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
