<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dp_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'o@brbj;z SfGa5r|, kMt&qq&<E)D<v9w?NJ9r;/@Sb@_g&uW+B1y+ebb)`u)vn1');
define('SECURE_AUTH_KEY',  '4{<f7 @Lp(5`ns-2Ay-s)LqK36]kII^f+HsjD[`Q@kK|le/45K5=R#mmjbG-|{[M');
define('LOGGED_IN_KEY',    'Q1L7cV&M3k0|J?]--0-e5JZ|kfhIM1q$Ajek1L,}2=[LB9iB+Jl@b4x@5v-(B|k|');
define('NONCE_KEY',        '|MNJy{P{&q~=An]]q!y_iJ9?l{:+[1A!-4G,-)= Ud m[x *-s%sp.n;X~;l)Ed3');
define('AUTH_SALT',        '*JrIGk}LPAX}Hn7bd39<A1# l5AB{vH`%j$MXPcB:-,b`|==4b-`I0tB^dA4Lp8^');
define('SECURE_AUTH_SALT', ')E%bs(dB}HKy4pZYy*#A,Qw,1VngOL/rE7g%}(1ycLse(j=6VbnT%_H,|]5cuiz=');
define('LOGGED_IN_SALT',   'ulhN~YKi^}P273D.-/LB_CJ+.[P[_;k G2~=<+_P5e `m2`qG!x@ g5@B0;N$T75');
define('NONCE_SALT',       'aY4+C?_U/+2$i,ixQ%EYA95?0in O+Yw]oYg~<)|;Q9@B)r7KSTz`TbmMB/tImxw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
