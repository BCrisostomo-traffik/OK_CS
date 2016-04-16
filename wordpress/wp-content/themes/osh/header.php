<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <!-- for Facebook -->
    <meta property="og:title" content="Savourez Le Froid"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://appstraffik.com/baileyscontest2016/images/fb_200x200.jpg"/>
    <meta property="og:url" content="http://appstraffik.com/baileyscontest2016"/>
    <meta property="og:description"
          content="Recherchez la collerette promotionnelle sur les produits baileys® participants disponibles à la saq pour obtenir un code nip. Inscrivez votre code nip ici pour courir la chance de gagner."/>


    <link href="<?php echo get_template_directory_uri() ?>/styles/foundation.css" rel="stylesheet">
    <!--[if IE 8]>
    <div style="color: white; ">Internet Explorer 9 or higher is required to view page. <a
        style="color:white; text-decoration:underline;"
        href="http://windows.microsoft.com/en-CA/internet-explorer/download-ie">Click here to download</a>.
    </div>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/styles/ie8.css"/>
    <![endif]-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/styles/ie8.css"/>
    <div style="color: white; z-index:9999;">Internet Explorer 9 or higher is required to view page. <a
        style="color:white; text-decoration:underline;"
        href="http://windows.microsoft.com/en-CA/internet-explorer/download-ie">Click here to download</a>.
    </div>
    <![endif]-->
    <!--[if IE 9]>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/styles/ie9.css"/>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.7.2.min.js"><\/script>')
    </script>

    <script src="<?php echo get_template_directory_uri() ?>/js/scripts.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/modernizr.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrap">
    <div id="main" class="large-6 columns blackbg">

        <div class="header">
            <div class="row">
                <div class="medium-12 columns hide-for-small logo">
                    <img src="<?php echo get_template_directory_uri() ?>/images/baileys-logo.png">
                </div>
                <div class="medium-12 columns hide-for-small cta">
                    <img src="<?php echo get_template_directory_uri() ?>/images/cta-image-desktop.png">
                </div>
                <div class="medium-12 columns hide-for-medium-up">
                    <img src="<?php echo get_template_directory_uri() ?>/images/cta-image-mobile.png">
                </div>
            </div>
        </div>

        <div class="small-12 columns">
            <div class="divider"></div>
        </div>






<?php


global $language;

if (isset($_GET["lang"])) {

    switch ($_GET["lang"]) {
        case "en":
            $language = 'en';
            break;
        case "fr":
            $language = 'fr';
            break;
        default:
            $language = 'en';
    }

} else {
    $language = 'en';
}

?>


