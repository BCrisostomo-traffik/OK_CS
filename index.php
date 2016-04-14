<?php
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach ($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time() - 1000);
        setcookie($name, '', time() - 1000, '/');
    }
}
require_once('config.php');
require_once('utils.php');

?>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">

    <title>Savourez Le Froid</title>
    <link rel="icon" type="image/png" href="images/favicon.png"/>

    <!-- for Facebook -->
    <meta property="og:title" content="Savourez Le Froid"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://appstraffik.com/baileyscontest2016/images/fb_200x200.jpg"/>
    <meta property="og:url" content="http://appstraffik.com/baileyscontest2016"/>
    <meta property="og:description"
          content="Recherchez la collerette promotionnelle sur les produits baileys® participants disponibles à la saq pour obtenir un code nip. Inscrivez votre code nip ici pour courir la chance de gagner."/>


    <link href="styles/foundation.css" rel="stylesheet">
    <!--[if IE 8]>
    <div style="color: white; ">Internet Explorer 9 or higher is required to view page. <a
        style="color:white; text-decoration:underline;"
        href="http://windows.microsoft.com/en-CA/internet-explorer/download-ie">Click here to download</a>.
    </div>
    <link rel="stylesheet" type="text/css" href="styles/ie8.css"/>
    <![endif]-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="styles/ie8.css"/>
    <div style="color: white; z-index:9999;">Internet Explorer 9 or higher is required to view page. <a
        style="color:white; text-decoration:underline;"
        href="http://windows.microsoft.com/en-CA/internet-explorer/download-ie">Click here to download</a>.
    </div>
    <![endif]-->
    <!--[if IE 9]>
    <link rel="stylesheet" type="text/css" href="styles/ie9.css"/>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')
    </script>

    <script src="js/scripts.js" type="text/javascript"></script>
    <script src="js/vendor/modernizr.js"></script>


</head>
<body class="">

<div class="large-3 columns bottle hide-for-medium-down"><img style="width: 130%;" src="images/bottle.png"></div>
<div class="wrap">
    <div class="large-6 columns blackbg">

        <div class="header">
            <div class="row">
                <div class="medium-12 columns hide-for-small logo">
                    <img src="images/baileys-logo.png">
                </div>
                <div class="medium-12 columns hide-for-small cta">
                    <img src="images/cta-image-desktop.png">
                </div>
                <div class="medium-12 columns hide-for-medium-up">
                    <img src="images/cta-image-mobile.png">
                </div>
            </div>
        </div>

        <div class="small-12 columns">
            <div class="divider"></div>
        </div>

        <div class="small-12 large-push-1 large-10 columns end" style="z-index:999;">
            <div id='registration-form'>
                <form id="agfrom" action="submit.php" method="POST">

                    <div id='form1' class="small-12 columns">
                        <div class="row">
                            <div class="small-12 columns">
                                <h2>ENTREZ LES DONN&Eacute;ES SUIVANTES</h2>
                                <span>*</span>
                                <p style="position: relative; top: 7px; font-size: 11px;">Champs obligatoires</p>
                            </div>

                            <div class="large-6 columns">
                                <div class="required"></div>
                                <span>*</span>
                                <input id="user_firstname" name="user[firstname]" type="text"
                                       g_placeholder="First Name"/>
                            </div>

                            <div class="large-6 columns">
                                <div class="required"></div>
                                <span>*</span>
                                <input id="user_lastname" name="user[lastname]" type="text" g_placeholder="Last Name"/>
                            </div>

                            <div class="large-6 columns">
                                <div class="required"></div>
                                <span>*</span>
                                <input id="user_email" name="user[email]" type="text" g_placeholder="E-mail Address"/>
                            </div>

                            <div class="large-6 columns">
                                <div class="required"></div>
                                <span>*</span>
                                <input id="user_postal" name="user[postal]" type="text"
                                       g_placeholder="Postal Code"/>
                            </div>


                            <div class="large-12 columns">
                                <p>Or you could nominate a friend for a
                                    chance to win her a Carter’s Oshkosh baby shower.
                                </p>
                              </div>


                            <div class="large-6 columns">
                                <div class="required"></div>
                                <span>*</span>
                                <input id="user_email" name="user[email]" type="text" g_placeholder="Nominee Name"/>
                            </div>

                            <div class="large-6 columns">
                                <div class="required"></div>
                                <div id="custom-selector-container-store">
                                    <span>*</span>
                                    <select id="user_store" name="user[store]" class="styled">
                                        <option value="0" selected disabled>Select a store</option>
                                        <option value="CA">Canada</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="form-item-agreement gchbx clearfix rulecbox">
                                        <div class="required"></div>
                                        <span class="checkbox-ast" style="margin-top:2px;">*</span>
                                        <input id="agreement" type="checkbox" name="user_agreement" value="agreement"
                                               style="color:#000;"/>
                                        <label style="font-family: arial,sans-serif;">Oui, j'ai compris le <a
                                                href="rules_and_regulations.php" target="_blank">R&egrave;glement
                                                officiel du concours</a> et la <a href="privacy.php" target="_blank">Politique
                                                de confidentialit&eacute; de Diageo</a> et j'accepte de les
                                            respecter.</label>
                                    </div>

                                    <div id="enter-button" class="" style="text-align:center;">
                                        <a href="submit.php" id='submit' class="button">Soumettre <img
                                                src="images/arrow.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer large-12 columns">
        <div class="row" style="margin-top: 30px; line-height: 20px; font-family:arial,san-serif">
            <div class="small-12 columns">
                <a href="">Disclaimer</a> | <a href="">Privacy Policy</a> | <a href="">Your California Privacy
                    Rights</a> | <a href="">Site map</a>
            </div>

            <div class="small-12 columns text-center">
                <p class="contest-info">© 2016 Carter's, Inc. Carter's, Count on Carter's, Little Layette, Child of
                    Mine, Just One You, Precious Firsts, If they could just stay little 'til their Carter's wear out,
                    OshKosh, OshKosh B'gosh, and Genuine Kids are trademarks owned by subsidiaries of Carter's, Inc.</p>

                <p class="contest-info"> Since 1895, OshKosh B’gosh has been the leader in manufacturing American kids
                    clothes. We specialize
                    in crafting high quality, affordable clothes for boys and girls that work on every level of kid’s
                    lives. From playtime to bedtime, school and beyond, OshKosh strives to continue the legacy of
                    producing fun, wearable clothes for kids that are made to last. OshKosh began creating kids jeans
                    fashioned to look just like Dad’s iconic overalls. Fast forward over a hundred years, and OshKosh
                    kids jeans are still one of our bestselling items. Manufactured with top quality fabrics, hardware
                    and attention to detail so kids can live their lives while maintaining style and comfort. Over the
                    years we’ve branched out into casualwear, swimwear, outerwear, playwear, dresses and even sleepwear.
                    Kids are our inspiration so we take the time to think about the things that are important in a kids’
                    life and we make exceptional clothes to meet those demands. At OshKosh B’gosh, we love kids and kids
                    love our clothes.</p>
            </div>
        </div>
    </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation/foundation.js"></script>
<script src="js/foundation/foundation.reveal.js"></script>

<script>
    $(document).foundation();
</script>

<script>
    // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    // ga('create', 'UA-10604611-43', 'auto');
    // ga('send', 'pageview');

</script>
</body>
</html>