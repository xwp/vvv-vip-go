<?php
/**
 * Configuration
 *
 * @package VVV VIP Go
 */

// Local configuation overrides.
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
	require_once( dirname( __FILE__ ) . '/wp-config-local.php' );
}

// VVV VIP Go specific config.
require_once( dirname( __FILE__ ) . '/vvv-config.php' );

// Site specific VIP configs.
if ( file_exists( WP_CONTENT_DIR . '/vip-config/vip-config.php' ) ) {
	require_once( WP_CONTENT_DIR . '/vip-config/vip-config.php' );
}

/* Standard wp-config.php stuff from here on down. */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
if ( ! defined( 'WPLANG' ) ) {
	define( 'WPLANG', '' );
}

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
