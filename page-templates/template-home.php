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
<div class="home-banner wow fadeIn" data-wow-duration="6s">
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.25s">A Dining Experience</h1>
    </div>
</div>

<div class="home-call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action wow zoomIn">
                    <div class="image"></div>
                    <div class="title">Dining Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second wow zoomIn" data-wow-delay="0.2s">
                    <div class="image"></div>
                    <div class="title">Lunch Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third wow zoomIn" data-wow-delay="0.4s">
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
            <h2 class="wow fadeInUp">
                <span>Welcome to</span>
                The Backbeach Eating House
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline wow fadeInUp">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aperiam at consequuntur cupiditate dicta dolorem excepturi expedita explicabo facere labore minima,
                    nesciunt nulla odio officiis perferendis quasi quia reiciendis rem totam.
                </p>
                <p class="wow fadeInUp">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut doloremque provident.
                    Dicta, dignissimos eaque expedita explicabo iusto nulla reiciendis repellendus sunt!
                    Consequuntur cumque et fugiat inventore minima molestiae non omnis perspiciatis sed voluptate.
                    Dolores natus nisi quod recusandae repellat!
                </p>
            </div>
            <div class="col-lg-3">
                <div class="button wow fadeInRight">
                    Read More <i class="fa fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-news">
    <div class="bg-image"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-md-6">
                <a href="#" class="news-img wow zoomIn">
                    <div class="image"></div>
                    <div class="date">Sun 13 May</div>
                    <div class="category">What's on</div>
                </a>
            </div>
            <div class="col-xl-1 d-none d-xl-block"></div>
            <div class="col-md-6">
                <h2 class="wow fadeInUp">Mother`s Day</h2>
                <p class="wow fadeInUp">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ipsum libero optio, quas rerum sunt
                    vel voluptatum. A animi cum cupiditate dolore enim exercitationem illo incidunt ipsa ipsum iusto
                    nihil non officia, placeat provident, quas quis sint soluta tempora voluptate, voluptatum!
                    Architecto, ipsa, ipsam...
                </p>
                <a href="#" class="button wow fadeInRight">
                    Read More <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-about">
    <div class="bg-image">
        <div class="top-overlay wow slideInDown">
            <img src="<?php echo get_template_directory_uri(); ?>/images/vector-top.svg" alt="Cutout Top" width="100%">
        </div>
        <div class="bottom-overlay wow slideInUp">
            <img src="<?php echo get_template_directory_uri(); ?>/images/vector-bottom.svg" alt="Cutout Bottom" width="100%">
        </div>
    </div>
    <div class="title-holder">
        <div class="container">
            <h2 class="wow fadeInUp">
                <span>Served fresh</span>
                from the paddock to the plate
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline wow fadeInUp">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aperiam at consequuntur cupiditate dicta dolorem excepturi expedita.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut doloremque provident.
                    Dicta, dignissimos eaque expedita explicabo iusto nulla reiciendis repellendus sunt!
                    Consequuntur cumque et fugiat inventore minima molestiae non omnis perspiciatis sed voluptate.
                </p>
            </div>
            <div class="col-lg-3">
                <div class="button wow fadeInRight">
                    Read More <i class="fa fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-about-images">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action wow zoomIn">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second wow zoomIn" data-wow-delay="0.2s">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third wow zoomIn" data-wow-delay="0.4s">
                    <div class="image"></div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-testimonials">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <h2 class="wow fadeInUp">Happy Customers</h2>
                <div class="testimonial-holder wow zoomIn">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eos in necessitatibus non quaerat unde
                        voluptate voluptatibus, voluptatum! Blanditiis consequatur excepturi exercitationem iure perferendis
                        voluptate!</p>
                    <div class="separator"></div>
                    <div class="author">Saad Ulde</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-subscribe">
    <div class="bg-image"></div>
    <div class="title-holder">
        <div class="container">
            <h2 class="wow fadeInUp">
                <span>Sign Up</span>
                Subscribe to our email newsletter
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="wow fadeInUp">
                    <?php echo do_shortcode( '[contact-form-7 id="21" title="Newsletter Subscriptions"]' ) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-social">
    <div class="title-holder">
        <div class="container">
            <h2 class="wow fadeInUp">
                <span>Socials</span>
                Follow us on facebook & instagram
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="facebook-holder wow fadeIn">
                    <div class="title">
                        <i class="fa fa-facebook-square"></i>
                        What`s new on facebook
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/call-to-action-1.jpg"
                                 alt="News Item" width="100%">
                        </div>
                        <div class="col-lg-6">
                            <div class="content">
                                <div class="meta-data">
                                    <div class="date"><i class="fa fa-calendar"></i> Posted 31 Jan 2020</div>
                                    <div class="likes"><i class="fa fa-thumbs-up"></i> 24 Likes</div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eligendi error
                                    esse fugit ipsam molestiae molestias nam quasi veniam vero.</p>
                                <a href="#" class="button">Read on facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="instagram-holder wow fadeIn">
                    <div class="title">
                        <i class="fa fa-instagram"></i>
                        @backbeachcafe
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
