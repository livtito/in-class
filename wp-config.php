<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tito_wordpress_0813');

/** MySQL database username */
define('DB_USER', 'tito_wp_0813');

/** MySQL database password */
define('DB_PASSWORD', '3bSBb9Eu4aNEfeuu');

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
define('AUTH_KEY',         '|7S__ceF*;.tL |]N2AXK<d|~z-uWS&0W-zFdmKqv9[S.<J#<vXd&62rUq&3+Yp8');
define('SECURE_AUTH_KEY',  '*sOHo,@ E5)J=P@jQWXv86H|GS}O.(We!l=F}yO?W;$;&U|x:c}}^u:.ruDtDR,n');
define('LOGGED_IN_KEY',    'd/^S_;KpS-CanzWw?q$KD^9K9ijE5Z0oXx5*?BWqy{#pEd$Ikh7fEP+YJ.xI+-w#');
define('NONCE_KEY',        '-C!?T-EJ>9,Dj^OU|4#x$JfaA2>hLH9Xr01T]FpB-s9UWF~NPfV:q3L.Wu$[CW*=');
define('AUTH_SALT',        '#>N)dItzOy*)/Ro:LeTv2)VSN2_%3N$>AE~,z~!#25<}~;7qdH6gwh3`u@DqE2%J');
define('SECURE_AUTH_SALT', '.2x_e]rxH|o0Q-h9},-=Gj2qyf@WFxD|}jt|^c:-2+WzCwU$z@,|[&FQ)vF|Z-Fe');
define('LOGGED_IN_SALT',   '1M|A:[]tG)H+%S??$zP9$!%-7{gU|VCu_1-uyl=mB=es[y#p(@D_!N^#4:XNAZxY');
define('NONCE_SALT',       '{EYvlfDs<h(-g6@OEp%w!AQnKWD% !CsW1XBSO+pRFSL(}y]?kWpaR?n%bX{m$/Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tl_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
