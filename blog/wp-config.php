<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link https://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'joeldaws_rpgtileBlog');

/** MySQL database username */
define('DB_USER', 'joeldaws_fooBlog');

/** MySQL database password */
define('DB_PASSWORD', '!!fooBlogChew10_X');

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
define('AUTH_KEY',         'Ow+iTh^r]rt>)8k>t)^K-zm=/.oQMDBV;wGhC*-[7+BU,Y7936NM>r&,pBN-?ANV');
define('SECURE_AUTH_KEY',  ' u+-BV(-J=_?M-P]MH,)5,mA6>)aF^VS1RI~yFY|oK&%;qa-KAS4JlbwF!HqDOr,');
define('LOGGED_IN_KEY',    'EsKK@dvApzw^e^H~jOi+rv_q_KBSV_D*4v2-4%4u(s-Igrr46!nKe_zoK~K4+i-~');
define('NONCE_KEY',        '7t f}P873L(3Mf+O,Z~Qr58oG%ajp$ou2NJ1t*P8-|4fZY?|N9r4UZ<v GjyGMp0');
define('AUTH_SALT',        'gG @zhy7BXtzpdyMCk_H5MAu&L}5PeH:/y8KoWvF,Bmey(&oDNZEaF7|6u6do|X5');
define('SECURE_AUTH_SALT', 'R~O7f%_e0lHR3*0Z;),mDdOSSgI=Fikir_Hu(9E_6Q*J<2LN209k3C@c)&K.gq7^');
define('LOGGED_IN_SALT',   'JHi`D@MsGe.?z~]D73aiCjOM6q4-x?c+*:$yU~~6f{J9vno2CzEr{u)Oyf_Jra?*');
define('NONCE_SALT',       '(WHI^49E?g/j/9,+1A9ccl?# A(bqeVm^_|m9yGd)Y(*6N@P$|Lo[xAiI+%Anug*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rpgtile_';

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
