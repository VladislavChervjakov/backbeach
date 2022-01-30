<?php
/**
 * Template Name: Template home
 *
 * Template for displaying home page
 *
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="home-banner">
    <div class="container">
        <h1>A Dining Experience</h1>
    </div>
</div>

<div class="home-call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action">
                    <div class="image"></div>
                    <div class="title">Dining Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second">
                    <div class="image"></div>
                    <div class="title">Lunch Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third">
                    <div class="image"></div>
                    <div class="title">Functions</div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-welcome">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Welcome to</span>
                The Backbeach Eating House
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aperiam at consequuntur cupiditate dicta dolorem excepturi expedita explicabo facere labore minima,
                    nesciunt nulla odio officiis perferendis quasi quia reiciendis rem totam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut doloremque provident.
                    Dicta, dignissimos eaque expedita explicabo iusto nulla reiciendis repellendus sunt!
                    Consequuntur cumque et fugiat inventore minima molestiae non omnis perspiciatis sed voluptate.
                    Dolores natus nisi quod recusandae repellat!
                </p>
            </div>
            <div class="col-lg-3">
                <div class="button">
                    Read More <i class="fa fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
