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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_prisca_shop' );

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
define( 'AUTH_KEY',         '1{GQEhKPLTyNQ4c~!Lr2}}?+;Qe5&reML1FCa&qIE*P(odlcSizi<l}F*$AJcOx[' );
define( 'SECURE_AUTH_KEY',  'm^b2%FFD*#oqQ);3 rtZ]u]&g%Rw_DO,R(# [PkGikE^O*=a6YC)1V`F@y98o[ta' );
define( 'LOGGED_IN_KEY',    ',,JQ;gwTLKVRcY^g.dp24c;kgxYrj6ni.bwOmdS3Zs*5#y!kWTf_D&k;=N/{8sQL' );
define( 'NONCE_KEY',        'F-AM#1_YAyG?@;6?drGm#.b>iY=U)O/E0g/^6%4},7a4*=6glrMV%#w3Y$uKU/dB' );
define( 'AUTH_SALT',        'iO`>/bUf~vq.[M5 ?0;$/ZwXAz.L[?@2.y;N3:/gV8Jmh&rga`fH# y2,KZ[;W&{' );
define( 'SECURE_AUTH_SALT', '`-n,vkmDY*/N[a#3)#76<m,1BVn8,R~2#xv:x (f&X[M<,O^,b-YA]A#y$_biZ=Y' );
define( 'LOGGED_IN_SALT',   'pguMS7{XBkhVu;&%F/^bTbM7:|_)Ny+p}Pg*Wqs9t%R>lCO R07.eI!2n5dij1l$' );
define( 'NONCE_SALT',       ':_@U48*57-f 4i{J gc%]vO#rdU3/S5;`KcHw8Bt&w#MlYE{s2dZQ`0G5Lb~dNf,' );

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
