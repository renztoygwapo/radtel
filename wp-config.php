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
define('DB_NAME', 'radtelcom_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '*%]6zI-d3Jth;+l?Qb52cqtRe!na69K^6@K!W|O|/B-~[Fx4;ih[[Z#D`ufQ7QsQ');
define('SECURE_AUTH_KEY',  '|MZ4*b6U,bxEa-2| } {M:+s))U#o$3z|pE|H^s0}+UV4.2%aNVj3KI-?ekXSy#y');
define('LOGGED_IN_KEY',    '(cN%4/ jIi=6{12RKB9-c0L&O<k&tp!0VT`jJL-aP/t,X_w2nI=P A]q>LN+cNCI');
define('NONCE_KEY',        'TW9fu>l[D`^Eb?Z!Vy@JuIi$?[O}i}>16;!XZh:M7E#1&fSpBq%boY-8+==W+u{M');
define('AUTH_SALT',        'VG*^x<^.6mHkazvx2:<H0Ea+F-nW~d^KN^V8.?QrkbaXxyw-TrNK1oxP$=4cAWY4');
define('SECURE_AUTH_SALT', 'd}.bJN~ -gByq+|@:H|[#K-E@5-+:lz4vO+IsXIMr<TT6Ib1p~]`/1p8Vn&McMJm');
define('LOGGED_IN_SALT',   'KyQFCesPz|8#iB_+:LwUnFA}Vx>I1s^w7Jd-J)Iy+ZIzGj |Tl +`e;-DV,<^,_e');
define('NONCE_SALT',       '97|8^@1k+8Qg1|Z_CqahJb~KB[?a^Pri]9Gn*up^;9C<0q{-WG9P7U?O&6Sc+zwk');

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
