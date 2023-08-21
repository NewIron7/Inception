<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
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

define('AUTH_KEY',         'Z  DF8mf%;~lQs+7&hbTKx@HI}U{?]RE_ck`,8)^IEewl3B:+&@[0|7*{|Ty>-Sq');
define('SECURE_AUTH_KEY',  'HkT9E#/$1gFUh$pVWIqg}xE~@Z5TpA$(2I|[ImZ+y_kr4PmzVaK,O<%&4nhw1Tv(');
define('LOGGED_IN_KEY',    '_h5NlBnH}+$ XL&R|J]q|-TA+>FJ`2eslq]notC6<8imQy1!}l58,b <i/riT?#=');
define('NONCE_KEY',        '0DvB`{WC*~,w(Ft5f>7*^>XHibmp$@z$sCA42RIDFk4s jK7M;=S$u@lq{PPZ?vz');
define('AUTH_SALT',        ':+|vr=+8*[I$6V{oH)#6m99!0S-2tdZ]+]5zM2bNh:>,~M,uIC+~{p%}9Np&<+6 ');
define('SECURE_AUTH_SALT', 'ilNkp>Ci+Wxz+HwHC&TmkVi- :ER|dFSp% *?_dq+V52A~+gQz-+A/NmSAR.n2Qg');
define('LOGGED_IN_SALT',   'M?-:(H6a|:t+ [*-6jAMu#aru2;|5&AIXD=/NU0U<on;48YkcOiqwH|}.D_&Jv^@');
define('NONCE_SALT',       '-t<L<A)R^-Rui4+_N9:J. FsSbfY}-2s^QEiP6a?`+^]|K|(M)!YsfsZ!C0& xI9');

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
