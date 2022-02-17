<div class="wrapper" id="wrapper-footer">
    <div class="bg-image"></div>

    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Contact</span>
                Send us a message bellow
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <?php echo do_shortcode( '[contact-form-7 id="22" title="Footer Form"]' ); ?>
                <div class="copyright">@ Copyright The Backbeach Eating House - All Rights Reserved //
                    Website by Moshi Moshi</div>
            </div>
        </div>
    </div>
</div>

<div class="footer-warning">
    <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/glass-cheers.png" alt="Cutout Top">
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, commodi deleniti deserunt dicta dolorem eaque ex, </h3>
        <p> exercitationem impedit nisi non repellendus saepe sapiente, vel veritatis? Lorem ipsum dolor sit amet,
        consectetur adipisicing elit. A, accusantium! Lorem ipsum dolor sit amet, consectetur adipisicing
        elit. Aut, cum. </p>
    </div>
</div>

<?php
wp_footer();
