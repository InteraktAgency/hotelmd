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
define( 'DB_NAME', 'hotelmd' );

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
define( 'AUTH_KEY',         '+r>#?QFL=O.)1O<B9*2uD,oFqY9l6HE3dTs-a*>L<ezq##+#6i$U5R4FVNsO]ll2' );
define( 'SECURE_AUTH_KEY',  '/:nA7f5h%Km:g>^`DigkKaAho-$Dr*zi&>2 ZTU,4I@;k%WO*`<FKxWM$`nbuWQg' );
define( 'LOGGED_IN_KEY',    'c=i0:p4-#$EEU@.x/*&J29 ;vj7P$b4&RRR|Lz!#;5rIhT,e/6@I%kuI@8s@:]vD' );
define( 'NONCE_KEY',        '<BaPEAEdJwX}6o6aU%sxRu)JS+^+[vV|0#T[1yY}}_L>%b#m2wv![}/M0L9L`]0j' );
define( 'AUTH_SALT',        'ttO%8%NH-Il#idguen_Y?;?52Gsi6lm7JKl38Cq#9v4]$x%f*wu=W_5j]V.~oARf' );
define( 'SECURE_AUTH_SALT', ']>R$+vKs(G2)q4a,*3$Z>Qo!|HSs_5S38o$ZXU7V5Yyc1@)l-epZ`5bfTG(|?=G8' );
define( 'LOGGED_IN_SALT',   'On*}~Q.9v1ElWFYx2S DY(w`3<h?T;iicx4YShA}XB L}D##&!N!so *zlg.,<Si' );
define( 'NONCE_SALT',       '/ 8[%jc_29RE^M5I#`p}jESG^jg]P[[IU@1 }msep8T/-k+`(&D<&vlZ`WR+c9Ge' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'md_';

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
