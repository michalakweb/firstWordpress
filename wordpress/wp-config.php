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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'firstwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V/U_p;Qzg:NpzwIB=]s|`|6}^8Vr705D{xT_c!&p$G6HSmYfWm;Y@KUPlrKD?c<M');
define('SECURE_AUTH_KEY',  'qHten/&V}55prwPEAIz&HGXZ{4,Wc*{822 Y7shSnTL?Ef!&f~V;]5e2Y$pa1Nr)');
define('LOGGED_IN_KEY',    'd/)$-+j1!e^_x2D|3#a.)o^E+zfi{0dWiv#gimL%Vs>rU)qr7?DU`fQ#B~-]G{B)');
define('NONCE_KEY',        '_Z3w3+v{G}#{83:G+|;V|$.`P_(wHA/hklIu/.y$7:fn@uQV>eD}bjo3V $PeymK');
define('AUTH_SALT',        'DR$5*m[0BI)R9n~p M>@0W&vlw.uW_}-%u:q+k8eO^dywu_LcMhIeW cbV2%$,k,');
define('SECURE_AUTH_SALT', 'cTAvbUL-,MJF3jQ8DN^WI20Y+4IVy|mHg^IaAkIB^H!C_#v!&/7ruXgm_7go,#%P');
define('LOGGED_IN_SALT',   'R>vvQuKW!-b;`|{}<Yo*e9+/sKjXUZJx9A_o*Lw1][{niB$l`]I<HgjRJ1v/+Pyv');
define('NONCE_SALT',       '{:Ii6,(@S9hUH!nnM<M>@IE>{%+K3=GDr&{kPg@ Y@z?<d!n0Hqbn9(k8>XK4=9k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'zax7_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
