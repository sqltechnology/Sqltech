<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'firzenh_wp6' );

/** Database username */
define( 'DB_USER', 'firzenh_wp6' );

/** Database password */
define( 'DB_PASSWORD', 'nc*rZ5^OV' );

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
define( 'AUTH_KEY',         '^<Q+;i{_MF~sFoqN:^r0>RI(`izY!)7Xco^bRwSdK(o{J!@BsE1 ^aNU40P!+>F+' );
define( 'SECURE_AUTH_KEY',  '|}@[!lL3]Z&(.MG_HDf,_bn:,2};wy3TDv76ZzDq|A(HL+bp,6Iiw^|vA,jJo/.^' );
define( 'LOGGED_IN_KEY',    'aZbxAxVbnvwB;_7WA|B?_=cI:w:<?{x/MLorv60aCRf]iN8<[@i8(n,eA$3^76Oj' );
define( 'NONCE_KEY',        '%.|a<-seV tn+Efdi~i)2^W3yw*cS*I:ZH1It3^4a%ljA^Yi=T`03/$GC0/@sI#L' );
define( 'AUTH_SALT',        '&licKy=%lcmXjeY5Z<3`(S^$L&SjR<8gdW>C|mieditOCzI2eTb3WgQtxkLYK>~7' );
define( 'SECURE_AUTH_SALT', 'oqHm4[Y*}SbRB i-JocvFk_$EVriY|_s8Se/KxAOhuYK/wMQk>Reuostd6K{}D*P' );
define( 'LOGGED_IN_SALT',   '?[KfLS!xwPL9Z2`#~2Rg@T,Y)-P4[||#{@%=Qo#Xs=D/HAv>yR BCUaylsS+3h~Z' );
define( 'NONCE_SALT',       'G{tA`LW$!YictS@_::%OU]hjO7~ajFZ)ZO(z~JNS00iT1f}U.;L%@Jf/0ex{YU_0' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
