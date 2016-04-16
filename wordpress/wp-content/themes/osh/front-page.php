<?php
get_header();
?>

<div id="form_complete" class="hide">
    <?php echo get_field('thank_you_' . $language); ?>
</div>


<div class="small-12 large-push-1 large-10 columns end" style="z-index:999;">
    <div id="top-form">
        <h1><?php echo get_field('form_title_' . $language); ?></h1>
        <p><?php echo get_field('form_content_' . $language); ?></p>
    </div>
    <div id='registration-form'>
        <?php
        echo do_shortcode('[contact-form-7 id="agfrsasfasdasddsadsasdom" title="English Form"]');
        ?>
    </div>
</div>


<?php get_footer(); ?>
