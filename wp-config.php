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
define('DB_NAME', 'wpblog');

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
define('AUTH_KEY',         '8-D}vjk$yMm-`)AZK!EilAy4S-+<|JX9?O(++%dtPex>SC|;TBT7AQA(+Oo0*R%O');
define('SECURE_AUTH_KEY',  'M+/ROhxa]Go1|hpGoY7|.cJx3cg2q(vHI_/$fX`H2X|saM_7>H7+Bhl}xa-y!#H*');
define('LOGGED_IN_KEY',    'iiyM}ruMev9/b$5m$s2xZk-Z2. Uay)/`*j6|.)Do)DSNJ5;-HPry;OM>5sjf|1w');
define('NONCE_KEY',        '[+a-wPaj0bH-LuEt-H3nq?u1$,>f_E3+>qk&O{mD9(MUBK[[gn2Wl7}Gz#.9+Di3');
define('AUTH_SALT',        'VC:C<{Tg]mgN<-?1+TB`T`}|kwqnY9^mq:H+OB/nu=}H9rnP<vsYS|LiI-WX?9Ih');
define('SECURE_AUTH_SALT', 'o!}[+h< QlOEP&ke&[`hm Rsp@R_YTSR;KR@p-}QD9KBP<t(WISBD-Zpo>c!idr:');
define('LOGGED_IN_SALT',   'I$:WI~%jUUJ+D0gC]M#U]m=|P-EB ^Gkv`kE3mpC)9R=BP F<jhS vS`m-og>9nS');
define('NONCE_SALT',       'i8rjQa!sl@NS:lV#=WjgB-[[*t_Ls@@!_[fn@AH|#s>PTfDKc%l(Y98Zp,[9 ,7d');

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
