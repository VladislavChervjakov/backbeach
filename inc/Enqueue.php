<?php

namespace Inc;

final class Enqueue {

    private static $instance = null;


    private function __construct() {

        add_action( 'wp_enqueue_scripts', [ $this, 'starter_theme_load_scripts' ], 1 );

    }

    public function starter_theme_load_scripts () {

        // load animation libraries
        wp_enqueue_style(
            'animate',
            'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css'
        );

        // load swiper
        wp_enqueue_style(
            'swiper',
            'https://unpkg.com/swiper@8/swiper-bundle.min.css'
        );

        // load wow
        wp_enqueue_script(
            'wow-js',
            'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js',
            [ 'jquery' ],
            true
        );

        // load swiper
        wp_enqueue_script(
            'swiper-js',
            'https://unpkg.com/swiper@8/swiper-bundle.min.js',
            [ 'jquery' ],
            true
        );

        // load bootstrap
        wp_enqueue_style(
            'bootstrap',
            'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        );

        wp_enqueue_script(
            'popper-js',
            'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
            [ 'jquery' ],
        true
        );

        wp_enqueue_script(
        'bootstrap-js',
           'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
                [ 'jquery' ],
            true
        );


        // load theme scripts and styles
        wp_enqueue_style(
           'backbeach',
           get_template_directory_uri() . '/dest/css/backbeach.css',
           [],
           '1.0'
       );


        wp_enqueue_script(
            'starter_theme_script',
               get_template_directory_uri() . '/dest/js/starter-theme.js',
                   [ 'jquery' ],
              '1.0',
          true
        );
    }


    public static function getInstance() {
        if ( !isset( $instance ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}