<div class="wrapper" id="wrapper-footer">
    <div class="bg-image"></div>

    <div class="title-holder">
        <div class="container">
            <h2 class="<?php if ( is_front_page() ): ?> wow fadeInUp <?php endif; ?>">
                <span>Contact</span>
                Send us a message bellow
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="<?php if ( is_front_page() ): ?> wow fadeInUp <?php endif; ?>">
                    <?php echo do_shortcode( '[contact-form-7 id="22" title="Footer Form"]' ); ?>
                </div>
                <div class="copyright">@ Copyright The Backbeach Eating House - All Rights Reserved //
                    Website by Moshi Moshi</div>
            </div>
        </div>
    </div>
</div>

<div class="footer-warning">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2 col-lg-2 col-xl-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/glass-cheers.png" alt="Cutout Top">
            </div>
            <div class="col-md-10 col-lg-10 col-xl-11">
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, commodi deleniti deserunt dicta dolorem eaque ex, </h3>
                <p> exercitationem impedit nisi non repellendus saepe sapiente, vel veritatis? Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. A, accusantium! Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Aut, cum. </p>
            </div>
        </div>
    </div>
</div>

<?php
wp_footer();
