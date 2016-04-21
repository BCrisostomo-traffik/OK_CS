<?php
get_header();
?>


<div id="form-container" class="small-12 columns end" style="z-index:999;">
    <div id="form-inner">
        <div id="top-form" class="text-center">
            <h1><?php echo get_field('form_title_' . $language); ?></h1>
            <p><?php echo get_field('form_content_' . $language); ?></p>
        </div>
        <div id='registration-form' class="clearfix">
            <?php
            echo do_shortcode('[contact-form-7 id="agfrsasfasdasddsadsasdom" title="English Form"]');
            ?>
        </div>

        <div id="form_complete" class="text-center hide">
            <div class="inner">
                <?php echo get_field('thank_you_' . $language); ?>

            </div>
        </div>

        <div id="share" class="text-center">

            <?php
            global $language;


            switch ($language) {
            case "en":
                ?>
                <h3>Share it on:</h3>
                <script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>
                <a href="http://twitter.com/intent/tweet?text=I%20entered%20the%20%23CartersComingSoon%20contest%20for%20a%20chance%20to%20win%20a%20baby%20shower%20at%20Carter%E2%80%99s%20OshKosh%20and%20%24250%20gift%20card.%20Wish%20me%20luck!">
                    <img
                        src="<?php echo get_template_directory_uri() ?>/images/icon-twitter.png">
                </a>   <a href="" id="fb-post">
                <img id="btn-facebook" src="<?php echo get_template_directory_uri() ?>/images/icon-facebook.png">
            </a>
            <?php
            break;
            case "fr":
            ?>
                <h3>Share it on-fr:</h3>

                <?php
                break;
            }
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
