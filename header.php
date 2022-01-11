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
    </head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
    <div id="wrapper-navbar">
        <div class="top-header-holder">

        </div>

        <nav id="main-nav" class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button"
                        data-toggle="collapse"
                        data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown"
                        aria-expanded="false"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
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
