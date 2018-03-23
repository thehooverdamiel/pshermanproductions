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
define('DB_NAME', 'pshermanproductions');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'mMYS=7 d6;y5BrrthZ &f!jg{ T-*g_4ZG_4f@X{5P)8Zv<hcK{a3VLYb2s%p]):');
define('SECURE_AUTH_KEY',  'ZYfwtr|J<M~`/rt^zLAY=%!KpCs4?0^>w@c6Bo:-;tQb-KO{?)[ylab1mbeG]L*a');
define('LOGGED_IN_KEY',    'qE?.g#l|T|#lu)S;C892nu,B)d=v76;p;r--?U?2M0XqB1,*@[.P,,o^e7!vQO1-');
define('NONCE_KEY',        '6v,r$!}wOh=:lE/gkA#xZ<,g!e#tq0j;S]:Evcq v$s~$b{vv ^[kc7<Iayl&yb_');
define('AUTH_SALT',        'jH%KOy8i1E3K]7jy91h1ryefX.$J@OiQxa5DmZsl6DY}6Cz0WEAp#< E^m<g.*.d');
define('SECURE_AUTH_SALT', 'M5rk]z&1Z,Gm:%D{I@ B[KSeZ[ VYbb5SWTZ(&4?u]kn%,D_f<_$4Pq,hf,wyqbl');
define('LOGGED_IN_SALT',   'js)f4~c%Dl~jCH;U+q1Q2!7fOJ@[-3,tjr_z`{$;(w//5`]Es0UBD(QTvnr=b(x)');
define('NONCE_SALT',       '[K1aMeXBy5T#(K:P{&Ld0w5elr4{h4G=nV,+n6N<ppSxZIYkmjs igWzKa{bi>K3');

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
