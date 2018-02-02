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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'iIXd@_t**B#H;#oaLR;:qQb.Ch?eqKBZ>`vVoq]Ow<h4=rfBw|4$(Cg.g;!);`3o');
define('SECURE_AUTH_KEY',  'nyjmg=GfXD?n%]n^oa$#8?Jh6)Q2_!tlx__;WFe!/tHWFFC:ASCL~By0m P7;mF1');
define('LOGGED_IN_KEY',    '7gl9BHU#$.IRp:uqd!8Tj@e=/411!BVq~6)WYf%Er!9r>n@,aj^n+c8ZSb-;pmnq');
define('NONCE_KEY',        '[T9(A7|c>9~e5M~@hA=enVefErN_0K7`9?I224aGj6s:c:S#K^,fdEuz9?)F?^pC');
define('AUTH_SALT',        '#.tewVI/T ,{Jr7VPJNX`tW|T@(4TVF3R%0n!%]pIQ0@Q?_Q8-f8W-%dlUS73#v7');
define('SECURE_AUTH_SALT', ']_#b,d+dwfc}]7 <D$lE*zNNw6v/WSoA~f8[ts=%y{*(H43K6SBuhKa`A^Z>%~MD');
define('LOGGED_IN_SALT',   '?=Is$!D*iTy&,UaJJ1OeCqg5Ra4,s2[@+1DC*EyqmMJg6^fWo#4Q{N`F7> n*$P%');
define('NONCE_SALT',       '6](~DI0)* !-H^Ui~3>q#G[/n[KgQ@3sF<>Be7xE2*ap1Vcd29@3=p~& x|,L{!m');

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
