<?php
get_header();
?>

<?php echo get_field('form_title_'.$language); ?>
<?php echo get_field('form_content_'.$language); ?>
<?php echo get_field('thank_you_'.$language); ?>
<?php
echo do_shortcode( '[contact-form-7 id="4" title="English Form"]');






?>
<?php get_footer(); ?>
