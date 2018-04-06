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
define('DB_NAME', 'vergy');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '/2FSf7Y)<cW_`CKfsVvaw,n{l}v$5avtT]|;RH2VHBHm3a.G$ANwP7,hv.lyV.3F');
define('SECURE_AUTH_KEY',  'W1!ugdOPB F;@XI?&6,9^YK3hjiZu*2]V[ljm$O(gfDj{AM&6<i$IUmlqV~R#Dp*');
define('LOGGED_IN_KEY',    '~(8.(~ `9p&N6k|8:k^fx/sQxYfz~tQ=$^K]zw%lUlkOxi<|vrAEujK*_hl+9{FI');
define('NONCE_KEY',        'j9Vlq)B8~QCAI9H&BHj^mGjfdHD_,d>O(^U._$9KIf05l y*5X}z`}/U;qO !iVb');
define('AUTH_SALT',        'n3;&&CwzsZd3|$f$8s$//EjgP@FlpvX/+pt4hE=]^BDhDgAbU@PCSbZasz_wFLHy');
define('SECURE_AUTH_SALT', 'p8ycbAAMsan&wX.EiBQmO|}b5@qujIPkUhI#h3sYfXn,Mv^O0-4WH3D>6RRuwHQ6');
define('LOGGED_IN_SALT',   ',mQYP6lBV_NE&c.`=ZKJT=Ld:<ODku8s2/TE{f8,vx>&Qg5a3wH]Mq(OFjrP$*V[');
define('NONCE_SALT',       ':Y|[| tqCY[b*(6oZP=ing;;7$[Bttz:b`0Y{GF]w9i2@BJ<M3|=o5<#&Pp/(64b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
