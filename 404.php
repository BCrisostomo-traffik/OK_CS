<?php

include('config.php');

if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}

// require_once ('AppInfo.php');
require_once ('utils.php');
?>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
		
		<title>Savourez Le Froid</title>
		<link rel="icon" type="image/png" href="images/favicon.png" />
		
    <meta property="og:url" content="http://savourezlefroid.com" />
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="Savourez Le Froid"/>
    <meta property="og:description" content="Je suis prêt &agrave; #savourerlefroid avec @baileyscanada cet hiver. Inscrivez-vous sur http://savourezlefroid.com pour courir la chance de gagner"/>
    <meta property="og:image" content="http://savourezlefroid.com/images/fb_200x200.jpg"/>

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

            <div class="row text-center">
                <div class="medium-12 large-offset-2 large-8 columns end">
					<p>&nbsp;</p>
					<h2>Page not found</h2>
					<p>
						<h2>Sorry, this page can not be found. Try checking the URL for errors, then try refreshing the page.</h2>
					</p>						      
                </div>
            </div>

            <div class="footer large-12 columns">
 
                <div class="row" style="margin-top: 30px; font-family:arial,san-serif">
<!--                     <div class="small-12 columns">          
                        <span class="hide-for-small"><a href="http://www.centurycouncil.org/" target="_blank">Consommation responsable</a> | <a href="http://www.drinkiq.com/" target="_blank">DrinkIQ.com</a>| <a href="rules_and_regulations.php" target="_blank">Règlement officiel du concours</a> | <a href="privacy.php" target="_blank">Politique de confidentialité</a></span>
                        
                        <span class="hide-for-medium-up"><a href="http://www.centurycouncil.org/" target="_blank">Consommation responsable</a> | <a href="http://www.drinkiq.com/" target="_blank">DrinkIQ.com</a> | <a href="rules_and_regulations.php" target="_blank">Règlement officiel du concours</a> |
                        <span class="small-12 column"><a href="privacy.php" target="_blank">Politique de confidentialité</a></span></span>
                    </div>

                    <div class="small-12 columns">
                        <p class="contest-info">*Aucun achat requis. Le concours s'adresse uniquement aux r&eacute;sidents du Qu&eacute;bec. Les participants doivent avoir 18 ans et plus. Le cours se d&eacute;roule du 31 janvier 2016 au 26 mars 2016. Visitez le www.savourezlefroid.com pour consulter le r&egrave;glement complet du concours, remplir un formulaire d'inscription sans achat ou entrer le NIP inscrit sur les collerettes des bouteilles de cr&egrave;me irlandaise BaileysTM/MC Original au format de 750 mL ou 1,14 L, ou de cr&egrave;me irlandaise BaileysTM/MC Vanille cannelle, de cr&egrave;me irlandaise Baileys TM/MC Chocolat cerise, ou de cr&egrave;me irlandaise Baileys TM/MC Caramel sal&eacute; au format de 750 mL. Le concours offre soixante-huit (68) grands prix, chacun compos&eacute; d'un (1) foyer portatif portant la marque BaileysTM/MC  d'une valeur approximative au d&eacute;tail de 150,00 $. Trente-deux (32) prix hebdomadaires sont offerts, chacun compos&eacute; d'un jet&eacute; portant la marque BaileysTM/MC  d'une valeur approximative au d&eacute;tail de 90,00 $. Les chances de gagner un prix hebdomadaire d&eacute;pendent du nombre de participations admissibles re&ccedil;ues, mais ne d&eacute;passeront pas 1/40 000 (rapportez-vous au r&egrave;glement int&eacute;gral pour conna&icirc;tre les dates applicables). Les chances de gagner un grand prix d&eacute;pendent du nombre de participations re&ccedil;ues mais pour chaque prix ne d&eacute;passeront pas 1/40 000. Vous devrez r&eacute;pondre correctement &agrave; une question d'habilet&eacute; math&eacute;matique pour gagner.
                        <p class="responsible legal18"><img src="images/18-legal.png"/></p>
                        <p class="responsible" style="float:right;"><img src="images/drinkResponsibily.png"/></p>
                    </div> -->
                </div>
            </div>     
    </div>      
</div>
	<script>
	  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  // ga('create', 'UA-56148005-1', 'auto');
	  // ga('send', 'pageview');

	</script>	
		</div>
	</body>
</html>