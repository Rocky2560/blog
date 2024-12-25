<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'dbs12387318' );

/** Database username */
define( 'DB_USER', 'dbu430514' );

/** Database password */
define( 'DB_PASSWORD', 'zSwGUSMXf41OdkF' );

/** Database hostname */
define( 'DB_HOST', 'db5014911999.hosting-data.io' );

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
define( 'AUTH_KEY',          '8`?lztuD,.4yNC@Dk8pLX6F)EQ:urYZewip={]RibVO6I?d$Kakw9c__YL2z*EDk' );
define( 'SECURE_AUTH_KEY',   '!>.vs-x?_}<XYL2t+2GIn1Nh=N?+ckC])@/`!?gwa4(E-092cpgmRi2v*PX_KUR>' );
define( 'LOGGED_IN_KEY',     'AVqq7~-)&xxK:Bc?AR.,n6k~E9rwYcX^ MR@~mvOg4{3@C4bb}1(_]4(mYDo>2eQ' );
define( 'NONCE_KEY',         '&/BXM@);_nk9E.;`l.O]Zh)`T[=M_+&/^)b31hZS{u%yX*j@Qd3jj<)&+SqwS/DT' );
define( 'AUTH_SALT',         'NUWU3$Q be_@Hj4^y|(6lE(hhFbG76Mhz>KX#q6JmyQ? L@;>.![H0gQW*wouHtL' );
define( 'SECURE_AUTH_SALT',  ';pp4w=Q+e,Z{B*Pf|U({eeEJ)TqZhdJAFkv}-@|NPt{6*C |{&LU6}Yz2U+{>8lf' );
define( 'LOGGED_IN_SALT',    '*:y$5=>WsaI|g^o{p]_b[;{-!:6i9yQbTAv|#fm-l:I6s)nkO-cRmtpzOV%4]b-K' );
define( 'NONCE_SALT',        '}:I,nUm8r]mb37V2ZqT?$3X^v5+wu;5=5SmcNjQ<JZGZ_x/KDAkOKP2;!`YZ=Kv$' );
define( 'WP_CACHE_KEY_SALT', 'L}sc+c,y=ug[j9wbchhF~ku%YRbj)s%V}B12K5DROFb@qHjs:JJcA^jjNGcCKT/k' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
