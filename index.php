<?php
include ('config.php');
if (isset($_SERVER['HTTP_COOKIE'])) {
	$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
	foreach ($cookies as $cookie) {
		$parts = explode('=', $cookie);
		$name = trim($parts[0]);
		setcookie($name, '', time() - 1000);
		setcookie($name, '', time() - 1000, '/');
	}
}
require_once ('utils.php');
?>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
		
		<title>Savourez Le Froid</title>
		<link rel="icon" type="image/png" href="images/favicon.png" />

<!-- for Facebook -->          
    <meta property="og:title" content="Savourez Le Froid" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://appstraffik.com/baileyscontest.com/images/fb_200x200.jpg" />
    <meta property="og:url" content="http://appstraffik.com/baileyscontest.com" />
    <!--<meta property="og:description" content="" />-->		
 
		<link href="styles/foundation.css" rel="stylesheet">
		<!--[if IE 8]>
			<div style="color: white; ">Internet Explorer 9 or higher is required to view page. <a style="color:white; text-decoration:underline;" href="http://windows.microsoft.com/en-CA/internet-explorer/download-ie">Click here to download</a>.</div>
			<link rel="stylesheet" type="text/css" href="styles/ie8.css" />
		<![endif]--> 
		<!--[if lt IE 8]>
			<link rel="stylesheet" type="text/css" href="styles/ie8.css" />
			<div style="color: white; z-index:9999;">Internet Explorer 9 or higher is required to view page. <a style="color:white; text-decoration:underline;" href="http://windows.microsoft.com/en-CA/internet-explorer/download-ie">Click here to download</a>.</div>
		<![endif]--> 
		<!--[if IE 9]>
		<link rel="stylesheet" type="text/css" href="styles/ie9.css" />
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')
		</script>
		<script src="js/scripts.js" type="text/javascript"></script>
		<script src="js/vendor/modernizr.js" type="text/javascript"></script>	

   <script>
      age_gate_settings = {
        default_fail_url: 'http://www.educalcool.qc.ca',
        default_lang: 'fr',
        default_country: 'CA',
        terms_url: 'terms.html',
        privacy_url: 'privacy.html',
        site_name: 'savourezlefroid.com', // this will change
        do_viewport_changes: false,
        adv_remember_me: true,
        lang: { fr: { label: 'CA French', url: 'js/fr.json' }},
        use_sso: true,
        style: {
            advanced_remember_me: {
              background: 'transparent',
              button_text_color: '#fff', //preselection color
              button_bg_color: '#fff', //preselection color
              button_active_text_color: '#fff', //color of selected option
              button_active_bg_color: '#4e729c', //color of selected option
              button_inactive_text_color: '#6490c4', //color of nonselected  option
              button_inactive_bg_color: '#fff' //color of nonselected option
            },
            overlay_opacity: '80',
            form_border: 'none',
            logo: 'images/baileys-logo.png',
            border: 'none',
            background_color: 'rgba(255, 255, 255, 0.9)',
            site_font: 'Gudea,"Helvetica Neue",Helvetica,Arial,sans-serif',
            site_color: '#6490c4',
            text_color: '#6490c4',
            text_font: 'Gudea,"Helvetica Neue",Helvetica,Arial,sans-serif',
            form_text_font: '#4d4d4d',
            terms_color: '#6490c4',
            tagline_color: '#6490c4',
            tagline_size: '18px',
            enter_button_bg: '#6490c4',
            enter_button_color: '#fff',
            enter_button_border: 'none',
            enter_button_hover_bg: '#fff',
            enter_button_hover_color: '#6490c4',
            enter_button_hover_border: 'none',
            missing_message_color: '#cc0000'
        },
          on_skip: function (reason) {
            $('header, footer, .page-wrapper').css({ 'visibility': 'visible' });
            $(window).trigger('agegateway:onskip');
          },
          on_display: function () {
            $('header, footer, .page-wrapper').css({ 'visibility': 'visible' });
            $(window).trigger('agegateway:ondisplay');
          },
          on_pass: function () {
            $(window).trigger('agegateway:onpass');
          }
        };
    </script>
    <script src="https://www.diageoagegate.com/production/agegate.min.js"></script>		
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
					<div class="small-12 columns hide-for-medium-up">
						<img src="images/cta-image-mobile.png">
					</div>					
				</div>							
			</div>

			<div class="small-12 columns">
				<div class="divider"></div>
			</div>

			<div class="row text-center">
				<div class="medium-12 large-offset-1-5 large-9 columns end prize">
					<p class="neutraTilt">Recherchez la collerette promotionnelle sur les produits baileys&reg; participants disponibles &agrave; la saq pour obtenir un code nip. Inscrivez votre code nip ici pour courir la chance de gagner.</p>
					<p><img class="large-5" src="images/baileys-image-1.png"><img class="large-5 splashpics" src="images/baileys-image-2.png"></p>					
					<a href="registration.php" id="submit" class="button">Inscrivez-vous <img src="images/arrow.png"></a>								
				</div>
			</div>

			<div class="footer large-12 columns">

				<div class="row" style="margin-top: 30px; line-height: 20px; font-family:arial,san-serif">
					<div class="small-12 columns">			
						<span class="hide-for-small"><a href="http://www.centurycouncil.org/" target="_blank">Consommation responsable</a> | <a href="http://www.drinkiq.com/" target="_blank">DrinkIQ.com</a>| <a href="rules_and_regulations.php" target="_blank">R&egrave;glement officiel du concours</a> | <a href="privacy.php" target="_blank">Politique de confidentialit&eacute;</a></span>
						
						<span class="hide-for-medium-up"><a href="http://www.centurycouncil.org/" target="_blank">Consommation responsable</a> | <a href="http://www.drinkiq.com/" target="_blank">DrinkIQ.com</a> | <a href="rules_and_regulations.php" target="_blank">R&egrave;glement officiel du concours</a> |
						<span class="small-12 column"><a href="privacy.php" target="_blank">Politique de confidentialit&eacute;</a></span></span>
					</div>

					<div class="small-12 columns">
                        <p class="contest-info">* Aucun achat requis. Le concours s'adresse uniquement aux r&eacute;sidents du Qu&eacute;bec. Les participants doivent avoir 18 ans et plus. Le cours se d&eacute;roule du 31 janvier 2016 au 26 mars 2016. Visitez le www.savourezlefroid.com pour consulter le r&egrave;glement complet du concours, remplir un formulaire d'inscription sans achat ou entrer le NIP inscrit sur les collerettes des bouteilles de cr&egrave;me irlandaise Baileys<sup>TM/MC</sup> Original au format de 750 mL ou 1,14 L, ou de cr&egrave;me irlandaise Baileys<sup>TM/MC</sup> Vanille cannelle, de cr&egrave;me irlandaise Baileys <sup>TM/MC</sup> Chocolat cerise, ou de cr&egrave;me irlandaise Baileys <sup>TM/MC</sup> Caramel sal&eacute; au format de 750 mL. Le concours offre soixante-huit (68) grands prix, chacun compos&eacute; d'un (1) foyer portatif portant la marque Baileys<sup>TM/MC</sup>  d'une valeur approximative au d&eacute;tail de 150,00 $. Trente-deux (32) prix hebdomadaires sont offerts, chacun compos&eacute; d'un jet&eacute; portant la marque Baileys<sup>TM/MC</sup>  d'une valeur approximative au d&eacute;tail de 90,00 $. Les chances de gagner un prix hebdomadaire d&eacute;pendent du nombre de participations admissibles reçues, mais ne d&eacute;passeront pas 1/40 000 (rapportez-vous au r&egrave;glement int&eacute;gral pour conna&icirc;tre les dates applicables). Les chances de gagner un grand prix d&eacute;pendent du nombre de participations reçues mais pour chaque prix ne d&eacute;passeront pas 1/40 000. Vous devrez r&eacute;pondre correctement à une question d'habilet&eacute; math&eacute;matique pour gagner.
						<p class="responsible legal18"><img src="images/18-legal.png"/></p>
						<p class="responsible" style="float:right;"><img src="images/drinkResponsibily.png"/></p>
					</div>
				</div>
			</div>

		</div>
		</div>

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