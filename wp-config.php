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

define('DB_NAME', 'db41515_skyline');



/** MySQL database username */

define('DB_USER', '1clk_wp_Yx2bbQI');



/** MySQL database password */

define('DB_PASSWORD', 'qXt8k3kh');



/** MySQL hostname */

define('DB_HOST', $_ENV{DATABASE_SERVER});



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

define('AUTH_KEY',         'TA3KMkt8 JBlaxlyP X2bGqKP2 AMAfv5no WCPVzCWS');

define('SECURE_AUTH_KEY',  'bUP5Otyk rYMHoGA6 gsoqHXuT pyR4SVUd fPhPyxBk');

define('LOGGED_IN_KEY',    'tSzgXKCr 2FVQ6GhB t6UjZBHv QoBxQi68 WCwLxnwA');

define('NONCE_KEY',        'TlYu1Y7O uYwG6bDb Cm6yjRla vVXv8zUN YMPLTEUv');

define('AUTH_SALT',        '8EmtBVKz 8TG1FTyL RHesTYqr lEDY1OWK m1IGnPNO');

define('SECURE_AUTH_SALT', 'z8OihFg7 tCxdoM83 ab4kRTwN vSXKBRde CiAuBZEM');

define('LOGGED_IN_SALT',   '1vDq4x1h zGfmQLxG cfXf75J6 zQjMTu7t DeWMOL4x');

define('NONCE_SALT',       'V2lUKQJ2 dqiVKyub wBk4CmHa 5rb1vp85 MdM4lN1B');



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

