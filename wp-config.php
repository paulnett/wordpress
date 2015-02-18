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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pnett');

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
define('AUTH_KEY',         '+N)DQ^N2-`{(TLc0RMFfEF-FqggDbZTZ+cgc[ztVH]eyk}CeI,+H) ]Pvy`&Vo;|');
define('SECURE_AUTH_KEY',  '4ShE|i+EVllz,#fy6@ <S|[It;i<<[~gAjiqu_Q`Xu]o8T#1YNyndWHu<5xwc#<9');
define('LOGGED_IN_KEY',    '6JLe|t9o,_ie<cw@Tql+0vD)STowc2[T&|{3Kqa+ACgTB!M;e_NZZFJh-S/dW:^V');
define('NONCE_KEY',        ';]z}p(VdO$~/uZYEB=m/WyKt%c||afV?T4+u!PyWujw#H&t[OQ?P<n|zDJx|,|SS');
define('AUTH_SALT',        'Wu(,*3$Z.EoH>3,jsGG!.4<(s+W+V3m}V$!`=)Qb~B9j>!a/(7|X;4,}:uy<ri2u');
define('SECURE_AUTH_SALT', 'b9gRJV^rk>z-1oO+gxrJ4l/k:s]j*L&Nzrb NmU,wTkabEfv?D9+Mim KK|R$mbi');
define('LOGGED_IN_SALT',   ';ex4A=a|t-T=i%F wK1N4KRqt@}}cigy[-0C57GZ7dO;bO7SmRo+Ag$wq|jO|[Ga');
define('NONCE_SALT',       '/)]|E7jYBp-!+->b5!t#]?(/9Z-4Zrs}nA{#z4QPF+nx@V_;4CrZz5YE|0130M<h');

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
