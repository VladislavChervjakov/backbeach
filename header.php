<?php
defined( 'ABSPATH' ) || exit;
?>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">        <?php wp_head(); ?>
        <?php //ToDo: Replace in footer ?>
        <script src="https://kit.fontawesome.com/fd03711f2b.js" crossorigin="anonymous"></script>
    </head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
    <div id="wrapper-navbar">
        <div class="top-header-holder">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-4">
                        <a href="/" class="logo-holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="The Backbeach Logo" width="200">
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="reservation-holder">
                            <div class="contact-holder">
                                <a href="#" class="phone">
                                    <i class="fa fa-phone"></i>
                                    08 9791 6575
                                </a>
                                <a href="#" class="address">
                                    <i class="fa fa-map"></i>
                                    Lot 757, Ocean Drive, Bunbury
                                </a>
                                <div class="social-media-holder-tablet">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <a href="#" class="reservation-btn">Make a Reservation</a>
                        </div>
                    </div>
                    <div class="col-">
                        <div class="social-media-holder">
                            <button class="navbar-toggler" type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNavDropdown"
                                    aria-controls="navbarNavDropdown"
                                    aria-expanded="false" >
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav id="main-nav" class="navbar navbar-expand-lg">
            <div class="container">
                <?php
                wp_nav_menu( [
                    'theme_location' => 'primary_menu',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarNavDropdown',
                    'menu_class' => 'navbar-nav',
                    'menu-id' => 'main-menu',
                    'depth' => 2,
                ] );

                ?>
            </div>
        </nav>
</div><!-- #wrapper-navbar end -->
