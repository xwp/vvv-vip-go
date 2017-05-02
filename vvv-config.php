<?php

// Define defaults, if not already defined.
if ( ! defined( 'VVV_VIP_GO_DB' ) ) {
	define( 'VVV_VIP_GO_DB', 'vvv_vip_go' );
}

// TODO: Implement ability to add custom URL.
define( 'VVV_VIP_GO_URL', 'http://vip.go.local' );

if ( ! defined( 'VVV_VIP_GO_DIR' ) ) {
	define( 'VVV_VIP_GO_DIR', 'vip-go-skeleton' );
}

// Database Constants.
define( 'DB_NAME', VVV_VIP_GO_DB );
define( 'DB_USER', 'wp' );
define( 'DB_PASSWORD', 'wp' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// Development Constants.
define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );
define( 'STYLE_DEBUG', true );
define( 'JETPACK_DEV_DEBUG', true );
define( 'SAVEQUERIES', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'COMPRESS_SCRIPTS', false );
define( 'COMPRESS_CSS', false );

// WordPress Constants.
define( 'FORCE_SSL_LOGIN', false );
define( 'FORCE_SSL_ADMIN', false );
define( 'WP_HOME', VVV_VIP_GO_URL );
define( 'WP_SITEURL', VVV_VIP_GO_URL . '/wp' );
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/web/' . VVV_VIP_GO_DIR );
define( 'WP_CONTENT_URL', VVV_VIP_GO_URL . '/web/' . VVV_VIP_GO_DIR );
define( 'WPMU_PLUGIN_DIR', dirname( __FILE__ ) . '/web/vip-mu-plugins' );
define( 'WPMU_PLUGIN_URL', VVV_VIP_GO_URL . '/web/vip-mu-plugins' );
