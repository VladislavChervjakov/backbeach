<?php

namespace Inc;

final class Editor {
    private static $instance = null;


    public function __construct() {

        // add custom menus
        add_action( 'after_setup_theme', [ $this, 'register_custom_nav_menus' ] );
    }

    public function register_custom_nav_menus() {
        register_nav_menus( [
            'primary_menu' => esc_html( 'Primary menu' )
        ] );
    }

    public static function getInstance() {
        if ( !isset( $instance ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}