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
define('DB_NAME', 'VanessaMerritt');

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

define('DISALLOW_FILE_EDIT', TRUE);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k?:eZJ+qaj|x+.[c$zXl0nEmxdE&lZDa6!jzyUZlZ-y|~Y-;2mQhn)@.783IuU%I');
define('SECURE_AUTH_KEY',  'oyW-JZ;V~7#k@{D+*9Cg*]SmG(KM//GO|o3f/4VK}b_qi<m]/`ebb2v6*oKL1W5$');
define('LOGGED_IN_KEY',    'Jyw:6|gBV_Ob#@tfNp))MBv)vz-LC^SKhnqp{Wv,|wMHAAJA>94LGa>:G+gKvGVM');
define('NONCE_KEY',        'Xqgyps(8{<KKTC;zHz~Z)T)KWW=)vfD8-LHZEHi(7$f`rRi?|zA+|i<?9`yeYl_;');
define('AUTH_SALT',        'gJ-Ir/Bck2>|VF];<Fwx1+wznFAYwBz<|o-TFOK+m#C|q,[)GL^`Ukj}T^f}T3T|');
define('SECURE_AUTH_SALT', 'B?WWbV-;i.P)kYzQ w%# d>`juq/gBjcE}8)3L_xZM[K[(Ve{x#VC%KAwulB0T!v');
define('LOGGED_IN_SALT',   '*u1=^fXkLs+C)}g;X`3bY>I[zu. KcmW9xdt@3Sq8q{6b^}+F*l7wR&o#KHC/1J0');
define('NONCE_SALT',       '+r9rySbga#ZiKInwQtN=n,-K[DSd{94f*vB+B4O)G`L#5D# ENXxh=-E:[o !VwZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to Canadian English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * en_CA.mo to wp-content/languages and set WPLANG to 'en_CA' to enable Canadian
 * English language support.
 */
define('WPLANG', 'en_CA');

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
