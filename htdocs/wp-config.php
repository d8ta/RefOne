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
/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once ABSPATH . 'vendor/autoload.php';

define( 'WP_AUTO_UPDATE_CORE', 'minor' );

A365\Wordpress\Environment::getInstance();
A365\Wordpress\Cache\Fpc::output();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         '`F@xINXZCUYrX!YQk/4!|U[2ch$6A,xEPyQMUO%,1VV^eUPR@9SV>yWP/1F w D0');
define('SECURE_AUTH_KEY',  'ff^-b=eFNrCF2@Pb5JSkXNSx`(1K!9J-&~2Fo6<B7<<dZd-<v<yqU@pBmX^]YBZ>');
define('LOGGED_IN_KEY',    'I3Na#k@3:4UDRPHi?L/Dv%]L/C2BP4 {`ZtM}sLs3(7QCt`E(--9BWq+9ObJ/8&i');
define('NONCE_KEY',        'wb!xFx|%wLNF) 9hvzU685xB+9]^_Xv524C*}Zy!>a`S.XiJ#,w6+4}ro6C)&>jN');
define('AUTH_SALT',        'Iua51T lhS1_&_Z,gLM .67>RN/9e4A-)|DALWT$,Nkhskz5LaScuwh|2}e00)>:');
define('SECURE_AUTH_SALT', 'LLZvuo/9q08^~mQxL)7UU,nG?jsAgH%XpsKs c>*azIn6&[JDWH2b-P4jdU:-UuV');
define('LOGGED_IN_SALT',   '`1P}![Pp!`?({N3;AHZ$J}@f6J)o9J)aJtAf0!QRZCjnWcM1 bd_Ph!LkiE`o-gS');
define('NONCE_SALT',       'gCi5o)5{bX?M!!/$^:z~tX5`Vy_&k]*]hJYXrd6hC&6s>q,V$xOZO*M9(#9 {k{@');

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
