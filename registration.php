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
require_once ('config.php');
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
    <meta property="og:image" content="http://appstraffik.com/baileyscontest2016/images/fb_200x200.jpg" />
    <meta property="og:url" content="http://appstraffik.com/baileyscontest2016" />
    <meta property="og:description" content="Recherchez la collerette promotionnelle sur les produits baileys® participants disponibles à la saq pour obtenir un code nip. Inscrivez votre code nip ici pour courir la chance de gagner." />		


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
		<script src="js/vendor/modernizr.js"></script> 

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

								<div class="small-12 large-7 columns">
									<div class="required"></div>
									<span>*</span>
									<input id="pinNumber" name="user[pin]" type="text" g_placeholder="Entrez un NIP"/>
									<div id='error_field'><p></p></div>
								</div>		
								
								<div class="small-12 large-5 columns pinpop">
									<a href="#" data-reveal-id="myModal"><img src="images/questionMark.png"></a><p>Les NIP sont sur les collerettes attachées aux produits Baileys participants, vendus à la SAQ</p>
								</div>	
								<div class="large-6 columns">
									<div class="required"></div>
									<span>*</span>
									<input id="user_firstname" name="user[firstname]" type="text" g_placeholder="Pr&eacute;nom"/>
								</div>

								<div class="large-6 columns">
									<div class="required"></div>
									<span>*</span>
									<input id="user_lastname" name="user[lastname]" type="text" g_placeholder="Nom"/>
								</div>

								<div class="large-12 columns">
									<span>*</span>
									<input id="user_email" name="user[email]" type="text" g_placeholder="Courriel"/>
								</div>

								<div class="large-12 columns">
									<div class="required"></div>
									<span>*</span>
									<input id="user_address1" name="user[address1]" type="text" g_placeholder="Adresse"/>
								</div>

								<div class="large-12 columns">
									<input id="user_address2" name="user[address2]" type="text" g_placeholder="Adresse 2"/>
								</div>

								<div class="large-12 columns">
									<div class="form-item user-city">
										<div class="required"></div>
										<span>*</span>
										<input id="user_city" name="user[city]" type="text" g_placeholder="Ville"/>
									</div>
								</div>
								<div class="small-12 medium-4 large-4 columns">
									<div class="required"></div>
									<div id="custom-selector-container-country">
										<span>*</span>
										<select id="user_country" name="user[country]" class="styled">
											<option value="0" selected disabled>Pays</option>
											<option value="CA">Canada</option>
										</select>
									</div>
								</div>

								<div class="small-12 medium-5 large-5 columns">
									<div class="required"></div>
									<div id="custom-selector-container-province">
										<span>*</span>
										<select id="user_province" name="user[province]" class="styled">
											<option value="0" selected disabled>Province/territoire</option>
											<option value="AB">Alberta</option>
											<option value="BC">Colombie-Britannique</option>
											<option value="MB">Manitoba</option>
											<option value="NB">Nouveau-Brunswick</option>
											<option value="NL">Terre-Neuve-et-Labrador</option>
											<option value="NT">Territoires du Nord-Ouest</option>
											<option value="NS">Nouvelle-Écosse</option>
											<option value="NU">Nunavut</option>
											<option value="ON">Ontario</option>
											<option value="PE">l'île du Prince-Édouard</option>
											<option value="QC" selected>Québec</option>
											<option value="SK">Saskatchewan</option>
											<option value="YT">Territoire du Yukon </option>
										</select>
									</div>
								</div>

								<div class="small-12 medium-3 large-3 columns end">
									<div class="form-item user-postal">
										<div class="required"></div>
										<span>*</span>
										<input id="user_postal" name="user[postal]" type="text" g_placeholder="Code Postal"/>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="small-12 columns">
										<div class="small-3 large-3 columns dob">
											<span class="inputlabel"><span>*</span>Date de<br>Naissance:</span>
										</div>
										<div class="required"></div>						
										<div class="small-3 large-3 columns">
										<select id="user_birthmonth" name="user[birthmonth]">
											<option value="0" selected disabled>MM</option>
											<option value="1" label="January">01</option>
											<option value="2" label="February">02</option>
											<option value="3" label="March">03</option>
											<option value="4" label="April">04</option>
											<option value="5" label="May">05</option>
											<option value="6" label="June">06</option>
											<option value="7" label="July">07</option>
											<option value="8" label="August">08</option>
											<option value="9" label="September">09</option>
											<option value="10" label="October">10</option>
											<option value="11" label="November">11</option>
											<option value="12" label="December">12</option>
										</select>
										</div>

										<div class="small-3 large-3 columns">
										<select id="user_birthday" name="user[birthday]">
											<option value="0" selected disabled>JJ</option>
											<option value="1" label="1">01</option>
											<option value="2" label="2">02</option>
											<option value="3" label="3">03</option>
											<option value="4" label="4">04</option>
											<option value="5" label="5">05</option>
											<option value="6" label="6">06</option>
											<option value="7" label="7">07</option>
											<option value="8" label="8">08</option>
											<option value="9" label="9">09</option>
											<option value="10" label="10">10</option>
											<option value="11" label="11">11</option>
											<option value="12" label="12">12</option>
											<option value="13" label="13">13</option>
											<option value="14" label="14">14</option>
											<option value="15" label="15">15</option>
											<option value="16" label="16">16</option>
											<option value="17" label="17">17</option>
											<option value="18" label="18">18</option>
											<option value="19" label="19">19</option>
											<option value="20" label="20">20</option>
											<option value="21" label="21">21</option>
											<option value="22" label="22">22</option>
											<option value="23" label="23">23</option>
											<option value="24" label="24">24</option>
											<option value="25" label="25">25</option>
											<option value="26" label="26">26</option>
											<option value="27" label="27">27</option>
											<option value="28" label="28">28</option>
											<option value="29" label="29">29</option>
											<option value="30" label="30">30</option>
											<option value="31" label="31">31</option>
										</select>
										</div>

										<div class="small-3 large-3 columns end">
										<select id="user_birthyear" name="user[birthyear]" style="width: 110%;">
											<option value="0" selected disabled>AAAA</option>
											<option value="2012" label="2012">2012</option>
											<option value="2011" label="2011">2011</option>
											<option value="2010" label="2010">2010</option>
											<option value="2009" label="2009">2009</option>
											<option value="2008" label="2008">2008</option>
											<option value="2007" label="2007">2007</option>
											<option value="2006" label="2006">2006</option>
											<option value="2005" label="2005">2005</option>
											<option value="2004" label="2004">2004</option>
											<option value="2003" label="2003">2003</option>
											<option value="2002" label="2002">2002</option>
											<option value="2001" label="2001">2001</option>
											<option value="2000" label="2000">2000</option>
											<option value="1999" label="1999">1999</option>
											<option value="1998" label="1998">1998</option>
											<option value="1997" label="1997">1997</option>
											<option value="1996" label="1996">1996</option>
											<option value="1995" label="1995">1995</option>
											<option value="1994" label="1994">1994</option>
											<option value="1993" label="1993">1993</option>
											<option value="1992" label="1992">1992</option>
											<option value="1991" label="1991">1991</option>
											<option value="1990" label="1990">1990</option>
											<option value="1989" label="1989">1989</option>
											<option value="1988" label="1988">1988</option>
											<option value="1987" label="1987">1987</option>
											<option value="1986" label="1986">1986</option>
											<option value="1985" label="1985">1985</option>
											<option value="1984" label="1984">1984</option>
											<option value="1983" label="1983">1983</option>
											<option value="1982" label="1982">1982</option>
											<option value="1981" label="1981">1981</option>
											<option value="1980" label="1980">1980</option>
											<option value="1979" label="1979">1979</option>
											<option value="1978" label="1978">1978</option>
											<option value="1977" label="1977">1977</option>
											<option value="1976" label="1976">1976</option>
											<option value="1975" label="1975">1975</option>
											<option value="1974" label="1974">1974</option>
											<option value="1973" label="1973">1973</option>
											<option value="1972" label="1972">1972</option>
											<option value="1971" label="1971">1971</option>
											<option value="1970" label="1970">1970</option>
											<option value="1969" label="1969">1969</option>
											<option value="1968" label="1968">1968</option>
											<option value="1967" label="1967">1967</option>
											<option value="1966" label="1966">1966</option>
											<option value="1965" label="1965">1965</option>
											<option value="1964" label="1964">1964</option>
											<option value="1963" label="1963">1963</option>
											<option value="1962" label="1962">1962</option>
											<option value="1961" label="1961">1961</option>
											<option value="1960" label="1960">1960</option>
											<option value="1959" label="1959">1959</option>
											<option value="1958" label="1958">1958</option>
											<option value="1957" label="1957">1957</option>
											<option value="1956" label="1956">1956</option>
											<option value="1955" label="1955">1955</option>
											<option value="1954" label="1954">1954</option>
											<option value="1953" label="1953">1953</option>
											<option value="1952" label="1952">1952</option>
											<option value="1951" label="1951">1951</option>
											<option value="1950" label="1950">1950</option>
											<option value="1949" label="1949">1949</option>
											<option value="1948" label="1948">1948</option>
											<option value="1947" label="1947">1947</option>
											<option value="1946" label="1946">1946</option>
											<option value="1945" label="1945">1945</option>
											<option value="1944" label="1944">1944</option>
											<option value="1943" label="1943">1943</option>
											<option value="1942" label="1942">1942</option>
											<option value="1941" label="1941">1941</option>
											<option value="1940" label="1940">1940</option>
											<option value="1939" label="1939">1939</option>
											<option value="1938" label="1938">1938</option>
											<option value="1937" label="1937">1937</option>
											<option value="1936" label="1936">1936</option>
											<option value="1935" label="1935">1935</option>
											<option value="1934" label="1934">1934</option>
											<option value="1933" label="1933">1933</option>
											<option value="1932" label="1932">1932</option>
											<option value="1931" label="1931">1931</option>
											<option value="1930" label="1930">1930</option>
											<option value="1929" label="1929">1929</option>
											<option value="1928" label="1928">1928</option>
											<option value="1927" label="1927">1927</option>
											<option value="1926" label="1926">1926</option>
											<option value="1925" label="1925">1925</option>
											<option value="1924" label="1924">1924</option>
											<option value="1923" label="1923">1923</option>
											<option value="1922" label="1922">1922</option>
											<option value="1921" label="1921">1921</option>
											<option value="1920" label="1920">1920</option>
											<option value="1919" label="1919">1919</option>
											<option value="1918" label="1918">1918</option>
											<option value="1917" label="1917">1917</option>
											<option value="1916" label="1916">1916</option>
											<option value="1915" label="1915">1915</option>
											<option value="1914" label="1914">1914</option>
											<option value="1913" label="1913">1913</option>
											<option value="1912" label="1912">1912</option>
											<option value="1911" label="1911">1911</option>
											<option value="1910" label="1910">1910</option>
											<option value="1909" label="1909">1909</option>
											<option value="1908" label="1908">1908</option>
											<option value="1907" label="1907">1907</option>
											<option value="1906" label="1906">1906</option>
											<option value="1905" label="1905">1905</option>
											<option value="1904" label="1904">1904</option>
											<option value="1903" label="1903">1903</option>
											<option value="1902" label="1902">1902</option>
											<option value="1901" label="1901">1901</option>
											<option value="1900" label="1900">1900</option>
										</select>	
										</div>
								</div>

								<div class="row">
									<div class="large-12 columns" >
										<div class="form-item-agreement gchbx clearfix rulecbox">
											<div class="required"></div>
											<span class="checkbox-ast" style="margin-top:2px;">*</span>
											<input id="agreement" type="checkbox" name="user_agreement" value="agreement" style="color:#000;" />
											<label style="font-family: arial,sans-serif;">Oui, j'ai compris le <a href="rules_and_regulations.php" target="_blank">R&egrave;glement officiel du concours</a> et la <a href="privacy.php" target="_blank">Politique de confidentialit&eacute; de Diageo</a> et j'accepte de les respecter.</label>
										</div>

										<div id="enter-button" class="" style="text-align:center;">
											<a href="submit.php" id='submit' class="button">Soumettre <img src="images/arrow.png"></a>
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
						<span class="hide-for-small"><a href="http://www.centurycouncil.org/" target="_blank">Consommation responsable</a> | <a href="http://www.drinkiq.com/" target="_blank">DrinkIQ.com</a>| <a href="rules_and_regulations.php" target="_blank">Règlement officiel du concours</a> | <a href="privacy.php" target="_blank">Politique de confidentialité</a></span>
						
						<span class="hide-for-medium-up"><a href="http://www.centurycouncil.org/" target="_blank">Consommation responsable</a> | <a href="http://www.drinkiq.com/" target="_blank">DrinkIQ.com</a> | <a href="rules_and_regulations.php" target="_blank">Règlement officiel du concours</a> |
						<span class="small-12 column"><a href="privacy.php" target="_blank">Politique de confidentialité</a></span></span>
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

        <div id="myModal" class="reveal-modal" data-reveal>
			<h2>Comment obtenir un code NIP?</h2>
	          <p>Les codes NIP sont sur les collerettes attachées aux produits Baileys<sup style="font-size: 10px; vertical-align: text-top;">®</sup> participants, vendus à la SAQ.<br>&nbsp;<br>Pour obtenir un code NIP sans achat, inscrivez clairement sur une enveloppe préaffranchie votre prénom, nom de famille et adresse postale complète, et faites-la parvenir avec une feuille de papier contenant votre numéro de téléphone et date de naissance, à TRAFFIKGROUP, a/s Concours Savourez le froid, 559 College St., Suite 301, Toronto, ON M6G 1A9. Assurez-vous d’affranchir suffisamment votre envelope.</p>
			  <p>Vous recevrez par la poste un (1) code NIP vous donnant droit à une participation au concours, jusqu’à épuisement des codes. Une seule participation sans achat par semaine.</p>
			  <a class="close-reveal-modal">&#215;</a>
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