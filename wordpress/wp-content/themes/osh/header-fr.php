<?php
global $language;
$language = 'fr';
?>
<script>
    $social = "<?php echo is_social(); ?>";
    $language = "<?php echo $language; ?>";
    $ref = "<?php echo $_SERVER['HTTP_REFERER'];?>";

    if ($social == 'true' || $ref == 'https://www.facebook.com/') {
        window.location = "http://www.cartersoshkosh.ca/<?php echo $language; ?>_CA/carterscomingsoon.html";
    } else if ($ref == 'http://www.cartersoshkosh.ca/en_CA/carterscomingsoon.html') {
    } else if ($ref == 'http://www.cartersoshkosh.ca/fr_CA/carterscomingsoon.html') {
    } else {
       window.location.href = "http://www.cartersoshkosh.ca/<?php echo $language; ?>_CA/carterscomingsoon.html";
    }
</script>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <!-- for Facebook -->
    <?php
    switch ($language) {
        case "en":
            ?>
            <meta property="og:title" content="#CartersComingSoon"/>
            <meta property="og:url" content="<?php echo site_url(); ?>"/>
            <meta property="og:description"
                  content="Enter for a chance to win a Carter’s OshKosh baby shower at one of our many new Canadian locations. Winners will also receive a $250 gift card to spend at any Carter’s OshKosh store and prizes for 10 guests."/>
            <meta property="og:type" content="website"/>
            <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/fb-share.jpg"/>

            <?php
            break;
        case "fr":
            ?>
            <meta property="og:title" content="#CartersArriveBientôt"/>
            <meta property="og:url" content="<?php echo site_url(); ?>&lang=fr"/>
            <meta property="og:description"
                  content="Inscrivez-vous pour courir la chance de gagner une fête pour la naissance de bébé dans l’un des nombreux nouveaux magasins Carter’s OshKosh au Canada. Les gagnants recevront également une carte-cadeau de 250 $ à dépenser dans les magasins Carter’s OshKosh, ainsi que des prix à remettre à chacun de leurs 10 invités."/>
            <meta property="og:type" content="website"/>
            <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/fb-share.jpg"/>
            <?php
            break;
    }
    ?>


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

<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '262148804141168',
            xfbml: true,
            version: 'v2.6'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="wrap clearfix">
    <div id="main" class="large-12 columns blackbg">
        <div class="header">
            <div class="row">
                <div class="medium-12 columns hide-for-small logo">
                    <a href="http://www.cartersoshkosh.ca/" target="_blank">
                        <img class="logo-carters"
                             src="<?php echo get_template_directory_uri() ?>/images/logo-carters-<?php echo $language; ?>.png">
                    </a>
                    <a href="http://www.cartersoshkosh.ca/" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo-oshkosh.png">
                    </a>
                </div>
            </div>
        </div>