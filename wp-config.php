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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '}X1ZX{A.H1Ar{kRsK^%pg>@.!e[dr^v+Pa:i%?jFU(#QMs+lWD m#[N`b5MrLb=|');
define('SECURE_AUTH_KEY',  '6GL 4:6EH>T`wA_+e|@x*8DG~pHyuOVfS|L! 4~[b.qKK/wu}nnnc]g!YAXAKr^,');
define('LOGGED_IN_KEY',    '%-!+AzC@|4+!TJyN 8>z Bq<j/4j33oo0||NfZ$UrRjbF:+)a[AH]!]uz!.M7l+j');
define('NONCE_KEY',        'm9y5J/+H|2>~WX{nFO$Y>+2J-Cv*6furDaeel|B]+[Ct0^<XOF1uRT8cjy1~x2=%');
define('AUTH_SALT',        '+tfXn/gXlw{g80t}Z/*V/ky6|z j=gkKHk+OFR/$BN`z*|.jk$@1vR:+RKez@#`i');
define('SECURE_AUTH_SALT', 'MtRfav0.7g I|v!_y4Q^aIz)}7<~?8QwRlW2PHBZhWfa?]HHDk<eS-zv/]8vRuUS');
define('LOGGED_IN_SALT',   '/~,/%$6SCIU>sz;/gHXy?!uxRtFWSQ%*Bl>%7^cO~5f*yzlbo0k$2xEO*x(_f}*H');
define('NONCE_SALT',       '|S~6b0$T{IQ}v]Ka3Do:2+=IA#JZWFKNGmSDAxw2g,m@TR0Ni7ZPerq;2>^-6/>d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
