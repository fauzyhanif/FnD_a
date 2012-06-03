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
define('DB_NAME', 'fnd_a');

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
define('AUTH_KEY',         'n!e <dTv8kC%4^`C8+Bp{psX+7!DmbytY.1{~J*f X%>%lunDTpUdA-R!/J,:@+<');
define('SECURE_AUTH_KEY',  '+e-A9+t(mVxR[e/D-+H7F7>P_[5)~gEgdSpuHPe944cM+v7# rd-v.I?K6m5B7D#');
define('LOGGED_IN_KEY',    '!hFI-sBSvf:3DSw@3aP,J[uO~Q*k dJS$k=^Ix`|Q9)&G]&n-x5>VT<3{8ausPO*');
define('NONCE_KEY',        '6xu@SeeAk}XjukYTkP]|EH9 X{yIT[JccUuZKXL#;wI2&/n&Z^``x-e;8_-d!hO-');
define('AUTH_SALT',        '%<Wu4y+Sf3C2UZdCy{4AupJ:4Q,bVo+u;N6HHU7,YvR@uFBob.<&,Yz+jP1n]9l-');
define('SECURE_AUTH_SALT', 'V:&9;6Zav:d#|qCLLjtcjIR_-o.eXof~psZtu|n[J~,8GYL 6nxy,0UKgf^[Y-4t');
define('LOGGED_IN_SALT',   'D5S3jXOU_nbO+l>0xBQ-nAH$<E:Is[H6)w]:mV:{!9c${W{0KFltP+.1`K>@j.}k');
define('NONCE_SALT',       'HW?3neL<NN.Ws]5j%;Mf|Gf9ufd5e<IyKlp&Dbjdz,-UVl!whg)80,7C?h#hW,(4');

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
