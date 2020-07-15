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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coolmat' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`n2r!%uiB[*3.: 4wl>_04/G%S5d@gjXt5X#1M@MR#DE3?=?-S69kJ*A0^*jT[LI' );
define( 'SECURE_AUTH_KEY',  'Wn]nmp<.YaAeYg#cx*y4DEyT92H/ !UpYf+Y,W&v,<s:D>~BbIWt9;}KlzXU9u-L' );
define( 'LOGGED_IN_KEY',    '`QQa<L]8d`Y.Gjs}F@Gr;P}43@AQ;OD7.VU~^SDI/v9`$iaLb,a}6?Zs-c.7H^9`' );
define( 'NONCE_KEY',        'NC27?PvbbK-b1Rnv~k(`b;&{JS8sX`BPYrcnBP]}@dU$>qNB<RwN(YwG^TF;9S{[' );
define( 'AUTH_SALT',        'SH(al@|b3]{%u{WBlpA=saK6IVD:kSpQeUUQKhs@R6R XK1r/~R/*4(FWM/[tU]<' );
define( 'SECURE_AUTH_SALT', 'Ci?~1BTlw/IHcUin/qxN 6+>bcH90u@3a`m.qUpX9<n`=yyz&u1K[L p.a46L=$$' );
define( 'LOGGED_IN_SALT',   'QMS9tC?&ZVLUkD3kE D!9?C=`<.BLR1WQN<?usbyh$H|C@;=vR*un4)A~cIe|^fw' );
define( 'NONCE_SALT',       'RMIY@T~{sD]T4;@&8qIf8BPeSD+hzIYO7prFA@;Yv&fg#-/% MU$:RWrc)Yz.A+g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
