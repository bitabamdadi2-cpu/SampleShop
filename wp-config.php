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
define( 'AUTH_KEY',          '.LOMy+~-H[Ubk6>LG%i_X7cNB/{GWmB^{*^_BZ6A>K+).mK Ggmw{U,=|,+:h }S' );
define( 'SECURE_AUTH_KEY',   '/SC2@GrG1?<;Vg#7_#)hwW20|+9yX+{P*%aCOd:gM*aBv+E=KP&KKvrIg._;Aij0' );
define( 'LOGGED_IN_KEY',     'dtyn;@2|&Tzg-2` `j5=c^tyOp>A wl4K$|(Ua4]DjI.SOh>LmvtdiX+S7IxgG|R' );
define( 'NONCE_KEY',         'qZoDx+&Pm_2KAQdLK>*p-Nt_nR=Ge|.i(jjR(6a(Ii6RO2`cAUOnuK(YW[neMaj_' );
define( 'AUTH_SALT',         '3,&lo0%$,/L{_1,D3e;b(CmxH-2KldvJizQwIY#iZhXe?00)6`[q7Z5WhT4-9UX@' );
define( 'SECURE_AUTH_SALT',  'c.lBfl~91(l]=i^c[K4H{lA>Dc#Hqzd48?w,W)Nsd&<VB(m%bW/a_I,|#An}8FI3' );
define( 'LOGGED_IN_SALT',    'r20[}3R>f>4k<(UhgDw.2u:q0vux}]_|l/T <{ZtH&F8K5(y^w:SJ:9)cEDKx[nw' );
define( 'NONCE_SALT',        'D6Z$*k:fn(RckSO>4{jr.i*_:@CtjyG2VY7Y#,kw6f_gEu+i1B()Y[j-BqK3v0)|' );
define( 'WP_CACHE_KEY_SALT', 'izO%9:@)#+r},Br3JN=YbiO*;#yvw(fVK&NpqEX~B:OWUb>Nxn&J5VALA |N)gw,' );


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
