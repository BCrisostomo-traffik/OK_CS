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
<html>
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
<body class="privacy">

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
    
            <div id='rules' class="row">
                    <div class="small-12 large-10 large-push-1 columns">
                
                        <h1>Avis relatif à la confidentialité et aux témoins</h1>

                                <p>Cet Avis relatif à la confidentialité et aux témoins donne un aperçu général de la politique complète de l'entreprise en la matière (cliquer ici pour y accéder). Il fournit des indications importantes sur la façon dont nous collectons, nous utilisons et nous partageons les renseignements personnels dont nous avons connaissance. L'Avis relatif à la confidentialité et aux témoins s'applique aux renseignements recueillis par l'intermédiaire du site Web www.diageo.com, exploité par Diageo plc, première entreprise mondiale de boissons alcoolisées de qualité supérieure, ou par l'une de ses sociétés affiliées.</p>
                                <p>Chaque fois que nécessaire, des hyperliens vous guident directement vers des renseignements complémentaires dans ce document. Les liens de cet Avis relatif à la confidentialité et aux témoins ne vous dirigent pas vers des contenus ou des sites Web externes.</p>
                                
                                <h2>1. Introduction</h2>
                                
                                <ul><li><a href="http://www.diageo.com/fr-ca/Pages/privacypolicy.aspx">Cliquez ici pour en savoir plus sur Diageo plc</a></li></ul>
                                
                                <h2>2. Avez-vous l'âge d'achat légal?</h2>
                                
                                <ul>
                                  <li>Ne nous communiquez aucun renseignement personnel si vous n'êtes pas légalement en âge d'acheter de l'alcool.</li>
                                  <li>Si nous pensons que vous n'avez pas l'âge légal pour acheter de l'alcool, nous ferons tout notre possible pour retirer vos renseignements personnels de nos dossiers.</li>
                                </ul>
                                
                                <h2>3. En quoi consistent les renseignements personnels?</h2>
                                
                                <ul>
                                  <li>Les renseignements personnels concernent un individu identifiable, tel que le définit la loi.</li>
                                </ul>
                                
                                <h2>4. Collecte et utilisation des renseignements personnels par Diageo</h2>
                                
                                <ul>
                                  <li>Nous recueillons les renseignements que vous choisissez de nous communiquer. Il s'agit notamment des renseignements fournis lorsque vous vous inscrivez sur nos sites Web, lorsque vous communiquez avec nous, lorsque vous répondez à des sondages ou des questionnaires, lorsque vous participez à des concours et lorsque vous publiez des renseignements dans des parties publiques de nos sites Web.</li>
                                  <li>En utilisant ce site Web et d'autres sites de Diageo (y compris en naviguant sur ces sites), vous pouvez nous fournir des renseignements personnels, tels que votre nom, vos coordonnées, vos préférences personnelles et des indications sur votre utilisation du site.</li>
                                  <li>Ce faisant, vous acceptez que nous utilisions ces renseignements conformément à l'Avis relatif à la confidentialité et aux témoins (version abrégée et complète).</li>
                                  <li>Si vous n'acceptez pas ces conditions, veuillez ne pas nous fournir de renseignements personnels ou faites-nous connaître vos objections par l'intermédiaire des coordonnées ci-dessous.</li>
                                </ul>
                                
                                <h2>5. Utilisation des témoins sur nos sites Web</h2>
                                
                                <p>Nous recueillons également des renseignements à l'aide de technologies Internet courantes, comme les « témoins » et les « GIF invisibles » (également dénommés « pixels espions » ou « connexions malignes »).</p>
                                <ul>
                                  <li><a href="http://www.diageo.com/fr-ca/Pages/privacypolicy.aspx#num5" style="font-size: inherit;">Cliquez ici pour en savoir plus.</a></li>
                                </ul>
                                
                                <h2>6. Utilisation des renseignements personnels</h2>
                                
                                <ul>
                                  <li>Les données personnelles que nous recueillons ne servent qu'à vous fournir les renseignements précis et les services que vous demandez, ainsi que ceux qui pourraient vous intéresser.</li>
                                </ul>
                                
                                <h2>7. Divulgation des renseignements personnels</h2>
                                
                                <ul>
                                  <li>Il est possible que vos renseignements personnels soient communiqués à des fournisseurs de Diageo et à certains tiers, mais uniquement si ces entreprises garantissent une protection adéquate de vos renseignements et, dans certains cas, uniquement lorsque vous y avez consenti.</li>
                                  <li>Dans certains cas, il peut s'avérer nécessaire d'acheminer vos renseignements personnels dans d'autres pays (y compris au Royaume-Uni, aux États-Unis, au Canada et dans d'autres pays à l'intérieur ou hors de la zone économique européenne), là où ils sont exploités et traités par Diageo, d'autres entreprises et des tiers.</li>
                                  <li>En nous communiquant des renseignements personnels, vous comprenez bien qu'ils puissent être utilisés et transférés conformément à l'Avis relatif à la confidentialité et aux témoins (versions abrégée et complète) et vous y consentez explicitement.</li>
                                </ul>

                                <h2>8. Parties publiques (ou inactives) de notre site Web</h2>
                               
                                <ul>
                                  <li>Les renseignements communiqués dans ou par l'intermédiaire des parties publiques du site (salons de clavardage, babillards électroniques et groupes de discussion) sont généralement accessibles et peuvent être recueillis et utilisés par d'autres.</li>
                                </ul>

                                <h2>9. Sécurité</h2>
                               
                                <ul>
                                  <li>Nous accordons la plus haute importance à la sécurité de vos renseignements personnels et nous prenons toutes les mesures pour la garantir. Nous avons mis en place les procédures physiques, électroniques et de gestion nécessaires pour protéger les données que nous recueillons.</li>
                                  <li>Nous n'avons aucun moyen de garantir la confidentialité des communications pendant qu'elles nous sont acheminées. Nous vous conseillons de ne pas inclure dans les communications de renseignements confidentiels, exclusifs ou délicats. Cliquez ici pour en savoir plus.</li>
                                </ul>
                               
                                <h2>10. Unsubscribe, access, questions and further information </h2>
                                
                                <ul>
                                  <li>À votre demande, ou lorsque la loi l'exige, nous pouvons confirmer, partager et/ou actualiser vos renseignements personnels en notre possession. Cependant, à des fins de protection de la vie privée, nous pouvons être amenés à vérifier votre identité au préalable.</li>
                                  <li>À tout moment, vous pouvez vous désinscrire pour cesser de recevoir nos envois à caractère commercial.</li>
                                  <li>Pour vous désinscrire et cesser de recevoir les communications en provenance de Diageo ou sur les marques Diageo, écrivez à l'adresse <a href="mailto:privacy@diageo.com" style="font-size: inherit;">privacy@diageo.com</a></li>
                                  <li><a href="http://www.diageo.com/fr-ca/Pages/privacypolicy.aspx#num10" style="font-size: inherit;">Cliquez ici pour en savoir plus sur vos choix.</a></li>
                                </ul>

                                <h2>Nous contacter</h2>

                                <p>Si vous avez des commentaires, des questions ou des plaintes à formuler sur la manière dont nous recueillons ou utilisons vos renseignements personnels, écrivez-nous à l'adresse :</p>
                                <p>Data Privacy Officer, Corporate Centre Legal Team, Diageo plc, Lakeside Drive, Park Royal, London, NW10 7HQ, Royaume-Uni</p>

                                <p>&nbsp;</p>

                                <a name="1"></a>
                                <h1>AVIS RELATIF À LA CONFIDENTIALITÉ ET AUX TÉMOINS</h1>
                               
                                <h2>1. Introduction</h2>
                                <p>Ce site Web est exploité par l'une des sociétés du groupe Diageo, dont Diageo plc est la société de portefeuille finale (enregistrée en Angleterre et au pays de Galles sous le numéro 23307 et à l'adresse Lakeside Drive, London, NW10 7HQ, Royaume-Uni).</p>
                                <p>Toutes les références à « nous », « nos », « notre » ou « la société » dans cette politique et dans l'avis d'adhésion sont censées faire référence à Diageo plc, ses filiales, ses sociétés affiliées et/ou ses associés, selon le cas.</p>
                                <p>Nous mettons tout en œuvre pour protéger votre vie privée. Nous mettons à votre disposition cet Avis relatif à la confidentialité et aux témoins pour vous aider à comprendre ce que nous faisons avec les renseignements personnels que vous nous fournissez. En nous communiquant vos renseignements personnels, vous adhérez à l'Avis relatif à la confidentialité et aux témoins et vous reconnaissez que nous pouvons recueillir, utiliser et divulguer vos renseignements personnels, conformément à ce document. Si vous n'êtes pas d'accord avec le contenu de cet Avis, ne nous communiquez pas vos renseignements personnels. Cet Avis relatif à la confidentialité et aux témoins fait partie intégrante des Conditions générales qui régissent votre utilisation du site en général. Nous n'utiliserons vos renseignements qu'aux fins précisées ci-après.</p>
                                <p>Cet Avis relatif à la confidentialité et aux témoins peut être mis à jour occasionnellement. Nous vous conseillons de consulter cette page régulièrement pour vous assurer d'être informé des dernières mises à jour.</p>
                                <p>Les changements apportés à l'Avis relatif à la confidentialité et aux témoins sont consignés ici :</p>
                                <p>Dernière révision le : 6 mars 2012</p>
                                <br/>
                                <p>Description des principales révisions :</p>
                                <br/>
                                <ul>
                                  <li>Section 3 - Description des renseignements personnels</li>
                                  <li>Section 4 - Description de la façon dont les renseignements personnels sont recueillis</li>
                                  <li>Section 5 - Utilisation des témoins et des GIF invisibles</li>
                                  <li>Section 6 - Description de la façon dont les renseignements personnels sont utilisés</li>
                                  <li>Section 7 - Description de la façon dont les renseignements personnels sont partagés</li>
                                  <li>Section 8 - Diffusion des renseignements sur des forums publics</li>
                                  <li>Section 10 - Modification de vos préférences en matière de confidentialité</li>
                                  <li>Section 12 - Description de l'utilisation des liens, des références, des interfaces et du contenu de sites de tiers</li>
                                </ul>

                                <h2>2. Âge d'achat légal</h2>
                                <p>Vous ne devez nous communiquer aucun renseignement personnel si vous n'êtes pas en âge légal d'acheter de l'alcool à l'endroit où vous résidez et dans la région où vous accédez au site (si elle diffère). Nous ne voulons pas recueillir de renseignements provenant de personnes n'ayant pas l'âge légal d'achat, ni vendre de boissons alcoolisées à quiconque n'est pas en âge d'en acheter. Si nous sommes avertis ou si nous avons des raisons de croire que quiconque en dessous de l'âge légal d'achat nous a communiqué des renseignements personnels, nous mettrons tout en œuvre pour retirer ces renseignements de nos dossiers ou nous ferons en sorte de les identifier et (dans la limite autorisée par la loi) de les conserver dans le seul but de nous assurer qu'ils ne sont plus utilisés.</p>
                                
                                <h2>3. En quoi consistent les renseignements personnels?</h2>
                                <p>Les renseignements personnels concernent un individu identifiable, tel que le définit la loi.</p>
                                
                                <h2>4. Collecte de renseignements personnels</h2>
                                <p>Vous êtes libre de nous communiquer ou non vos renseignements personnels. Nous recueillons uniquement les renseignements que vous choisissez de nous communiquer. Dans certains cas, nous vous offrons la possibilité de choisir de recevoir ou non des renseignements de notre part ou provenant de tiers de confiance (en acceptant ou non de recevoir des offres promotionnelles spéciales, par exemple). Dans d'autres cas, vous n'aurez pas la possibilité de refuser, comme lorsque nous remplissons les obligations d'un contrat envers vous, lorsque nous gérons une transaction à votre demande, ou lorsque la loi l'exige</p>
                                <p>Vous pouvez décider de nous communiquer des renseignements personnels dans les cas suivants, par exemple : vous communiquez avec nous pour une demande, vous vous inscrivez sur le site, vous transmettez un élément à un ami, vous effectuez un achat, vous répondez à un sondage ou vous remplissez un formulaire avec vos renseignements personnels, vous nous demandez des renseignements, vous participez à un concours, vous publiez des éléments sur une partie publique du site ou vous profitez d'une promotion.</p>
                                <p>En nous communiquant des renseignements personnels quels qu'ils soient, vous comprenez et vous acceptez sans ambiguïté qu'ils puissent être transférés, recueillis et traités dans d'autres pays ou territoires. Tout transfert et traitement de vos renseignements personnels sera effectué en conformité avec cet Avis relatif à la confidentialité et aux témoins.</p>
                                <a name="2"></a>
                                
                                <h2>5. Témoins</h2>
                                <p>À l'instar d'autres sites Web, nous utilisons des « témoins » pour nous aider à recueillir et à conserver des renseignements sur les visiteurs de nos sites Web.</p>
                                <p>Un témoin est une chaîne de texte informative qu'un site Web transmet au fichier témoin du navigateur, situé sur le disque dur de l'ordinateur, afin que le site Web se souvienne de vous.</p>
                                <p>Un témoin contient généralement le nom du domaine d'où il est issu, sa « durée de vie » et une valeur, habituellement un nombre unique généré de manière aléatoire.</p>
                                <h3>Quels types de témoins sont utilisés sur ce site?</h3>
                                <p>Types de témoins utilisés sur ce site Web :</p>
                                <br/>
                                <ol>
                                  <li>Témoin de préférence : à votre demande, nous pouvons placer un témoin pour conserver vos préférences, afin que vous n'ayez plus besoin de les indiquer (pays/âge et langue) sur notre page passerelle. Ce témoin n'est pas adapté si vous partagez votre ordinateur avec d'autres.</li>
                                  <li>Partage social : ce témoin vous identifie par rapport aux réseaux sociaux, comme Facebook et Twitter, et permet l'interaction entre votre activité sur les sites des réseautage social et sur notre site Web et facilite la transition entre les sites.</li>
                                  <li>Analyse du site : nous recourons à Google Analytics pour nous aider à analyser l'utilisation de notre site Web. Cet outil analytique utilise des « témoins », à savoir des fichiers texte placés sur votre ordinateur pour recueillir, sous forme anonyme, des renseignements sur le comportement des visiteurs et sur la connexion Internet. Les données générées par le témoin sur votre utilisation du site Web (y compris votre adresse IP) sont transmises à Google. Elles sont alors utilisées pour évaluer l'utilisation du site Web par les visiteurs et pour générer des rapports statistiques sur l'activité du site. Pour refuser d'être suivi par Google Analytics d'un site à l'autre, visitez la page <a href="http://tools.google.com/dlpage/gaoptout">http://tools.google.com/dlpage/gaoptout.</a></li>
                                  <li>Témoins temporaires : nous utilisons des témoins temporaires qui accompagnent l'utilisateur dans sa navigation sur le site, afin de conserver les préférences qu'il sélectionne au cours d'une session. Ces témoins sont supprimés dès que vous quittez le site.</li>
                                  <li>Témoins de gestion du contenu : le site a besoin de ces témoins pour que le système de gestion du contenu fonctionne.</li>
                                  <li>Témoins de préférence du modèle : ces témoins, qui sont nécessaires pour les sites mobiles, permettent à un site d'avoir l'aspect adéquat et de se comporter comme il se doit.</li>
                                </ol>
                                <h3>Comment activer/désactiver les témoins?</h3>
                                <p>Vous avez la possibilité d'accepter ou de refuser les témoins en modifiant les paramètres de votre navigateur. Cependant, si les témoins sont désactivés, il se peut que certaines fonctions interactives du site ne soient pas disponibles.</p>
                                <p>Il existe plusieurs méthodes pour gérer les témoins. Consultez l'aide du navigateur pour en savoir plus sur ces fonctions. Dans Internet Explorer, par exemple, vous pouvez sélectionner le menu Outils/Options Internet, puis les onglets Sécurité et Confidentialité pour personnaliser les options du navigateur. Si vous utilisez plusieurs ordinateurs à partir de différents endroits, vous devez vous assurer que chaque navigateur est réglé en fonction de vos préférences en matière de témoins.</p>
                                <p>Certains navigateurs d'aujourd'hui possèdent des fonctions capables d'analyser les politiques de confidentialité des sites Web et de permettre aux utilisateurs de maîtriser leurs besoins en la matière. Ces fonctions sont connues en tant que plateforme pour les préférences de confidentialité (P3P).</p>
                                <p>Vous pouvez facilement supprimer les témoins qui ont été installés dans le dossier correspondant de votre navigateur. Si vous utilisez l'Explorateur de Microsoft Windows, par exemple :</p>
                                <ul>
                                  <li>Ouvrez l'Explorateur Windows.</li>
                                  <li>Cliquez sur le bouton de recherche de la barre d'outils.</li>
                                  <li>Tapez « cookie » dans la zone de recherche Dossiers et fichiers.</li>
                                  <li>Sélectionnez Poste de travail dans la zone Regarder dans.</li>
                                  <li>Cliquez sur Rechercher maintenant et double-cliquez sur les dossiers trouvés.</li>
                                  <li>Sélectionnez les éventuels fichiers témoins.</li>
                                  <li>Appuyez sur la touche Suppr du clavier.</li>
                                </ul>
                                <p>Si vous n'utilisez pas l'Explorateur de Microsoft Windows, sélectionnez « cookies » dans la fonction Aide pour savoir où trouver le dossier des témoins.</p>
                                
                                <h2>6. Utilisation des renseignements personnels</h2>
                                <p>Nous pouvons être amenés à utiliser vos renseignements personnels pour vous fournir les services que vous demandez, et d'autres services dont vous pourriez avoir besoin. Par exemple, nous pouvons être amenés à utiliser vos renseignements personnels dans les cas suivants :</p>
                                <p>Communications commerciales. Nous pouvons utiliser vos renseignements personnels pour communiquer avec vous au sujet de nos produits et services, et de ceux de nos filiales, sociétés affiliées et mère, ainsi que leurs activités connexes.</p>
                                <p>Analyse marketing. Nous pouvons utiliser vos renseignements personnels à des fins d'analyse marketing interne, pour évaluer, par exemple, les tendances auprès de nos consommateurs ou pour mesurer le volume de trafic vers nos sites Web.</p>
                                <p>Besoins transactionnels. Nous pouvons utiliser vos renseignements personnels pour répondre à vos demandes et à vos requêtes, gérer vos comptes et vos transactions, comme les paiements par carte de crédit pour les produits que vous nous commandez, à nous directement ou à nos agents, ou pour mener à bien ces transactions (livraison, par exemple).</p>
                                <p>Transfert à un ami. Lorsque vous nous communiquez des renseignements sur quelqu'un d'autre, pour que nous lui fassions parvenir des éléments provenant d'un de nos sites Web, par exemple, nous lui enverrons uniquement les renseignements que vous avez explicitement demandés. Nous ne profiterons pas des renseignements que vous nous avez communiqués pour lui envoyer d'autres messages. Avant que nous lui transmettions les renseignements, vous devez attester que votre ami a l'âge légal pour acheter de l'alcool à l'endroit où il vit.</p>

                                <h2>7. Divulgation des renseignements personnels</h2>
                                <p>Nous sommes attentifs aux renseignements que vous nous communiquez et nous ne les partageons qu'avec des tiers qui leur assurent une protection adéquate. Il peut arriver que nous communiquions vos renseignements personnels aux tiers suivants :</p>
                                <ol type="a">
                                  <li>(a) Tiers auxquels vous avez donné votre consentement.</li>
                                  <li>(b) Nos fournisseurs de services et sous-traitants, y compris nos sociétés affiliées, retenus pour accomplir des tâches en notre nom ou pour nous fournir des services (exemples : entreposage et livraison, commercialisation et publicité, traitement de données et de cartes de crédit, vérification de l'âge, mise au point de logiciels, hébergement et gestion de sites Web, services bureautiques et relatifs aux technologies de l'information, services professionnels de type juridique, comptable, de vérification ou autres, et autres services liés à notre activité), à condition que ces fournisseurs de services et sous-traitants ne recueillent pas, n'utilisent pas et ne divulguent pas les renseignements personnels à d'autres fins que celles utiles pour accomplir les tâches en notre nom ou pour nous fournir des services, ou encore dans le cadre d'obligations légales.</li>
                                  <li>(c) Tiers qui, selon notre opinion raisonnable, requièrent les renseignements à titre de représentants légaux désignés ou autorisés.</li>
                                  <li>(d) Tiers triés sur le volet, y compris au sein de nos sociétés affiliées, choisis pour vous envoyer des renseignements à caractère commercial et promotionnel susceptibles de vous intéresser. En l'occurrence, ces organisations peuvent être tenues à la confidentialité et des restrictions peuvent s'appliquer quant à l'utilisation de vos renseignements personnels. Avant d'autoriser une société non affiliée à vous envoyer des renseignements à caractère commercial et promotionnel, nous vous demanderons votre consentement explicite.</li>
                                  <li>(e) Personne ou entité, y compris nos sociétés affiliées, dans le cas d'une vente, d'une fusion, d'une consolidation, d'un changement de contrôle, d'un transfert d'actifs importants, d'un financement, d'une réorganisation ou d'une liquidation, au cours duquel nous transférons, vendons ou cédons à ce tiers des renseignements sur votre relation avec nous, y compris, mais sans s'y limiter, des renseignements qui vous identifient personnellement et d'autres éléments concernant votre relation avec nous.</li>
                                  <li>(f) Autorités policières, organisme gouvernemental ou de réglementation, ou autre tiers, afin de se conformer à la loi, ou lorsque nous croyons qu'une telle action est nécessaire pour se conformer à la loi, ou pour détecter, nous protéger ou nous défendre, ainsi que d'autres tiers, contre tout vol ou toute erreur, négligence, rupture de contrat, fraude ou autre activité illégale ou préjudiciable, afin de se conformer à nos exigences en matière de sécurité et de vérification, ou de vérifier le respect des politiques, procédures et obligations contractuelles et légales de l'entreprise.</li>
                                </ol>
                                
                                <h2>8. Sections publiques (ou interactives) de nos sites Web</h2>
                                <p>Les renseignements que vous divulguez dans ou par l'intermédiaire des sections publiques du site (salons de clavardage, babillards, groupes de discussion ou modules de réseaux sociaux), qui sont généralement accessibles et peuvent être récupérés et utilisés par d'autres, peuvent donner lieu à des messages ou des contacts de tiers non sollicités. Ne donnez aucun renseignement sur vous dans des sections publiques (ou interactives) du site. Ce type de cas n'est pas couvert par le présent Avis relatif à la confidentialité et aux témoins.</p>
                                <a name="3"></a>
                                
                                <h2>9. Sécurité</h2>
                                <p>Nous accordons la plus haute importance à la sécurité de vos renseignements personnels et nous prenons toutes les mesures pour la garantir. Nous avons mis en place les procédures physiques, électroniques et de gestion nécessaires pour protéger les données que nous recueillons. Cependant, nous n'avons aucun moyen de garantir la confidentialité des communications pendant qu'elles nous sont acheminées. Nous vous conseillons par conséquent de ne pas inclure dans les communications de renseignements confidentiels, exclusifs ou délicats.</p>
                                <p>Dans le cas improbable où nous pensons que la sécurité de vos renseignements personnels en notre possession ou sous notre contrôle a été compromise, nous pouvons décider de vous en avertir. Si nous le jugeons approprié, nous nous efforcerons de vous informer le plus rapidement possible compte tenu des circonstances et, dans la mesure où nous avons votre adresse courriel, nous pouvons utiliser cette méthode pour vous prévenir.</p>
                                <p>Il convient de rappeler que, conformément aux Conditions générales applicables à ce site Web, dont l'Avis relatif à la confidentialité et aux témoins fait partie, il vous appartient de veiller à la stricte confidentialité du mot de passe de votre compte. Vous êtes également responsable de toutes les activités effectuées avec votre compte et votre mot de passe. Il est de votre unique et entière responsabilité de conserver votre mot de passe secret et de contrôler son utilisation, de restreindre l'utilisation de votre compte et la possibilité d'y accéder, et enfin de nous avertir lorsque vous souhaitez annuler votre compte. Nous ne pourrons être tenus responsables de toute perte ou tout dommage résultant de votre inaptitude à respecter cette obligation.</p>
                                <a name="4"></a>
                                
                                <h2>10. Désinscription, accès, questions et autres renseignements</h2>
                                <p>À votre demande, ou lorsque la loi l'exige, si vous communiquez avec nous en utilisant les renseignements de désabonnement ci-dessous, nous vous confirmerons les renseignements personnels que nous détenons, nous les mettrons à jour, nous les supprimerons, nous traiterons les demandes de refus particulières (y compris celles pour lesquelles vous aviez précédemment accepté l'utilisation de vos renseignements personnels) et/ou nous corrigerons les éventuelles imprécisions qu'ils contiennent.</p>
                                <p>Pour vous désabonner des communications en provenance de Diageo ou concernant toutes les marques de Diageo, veuillez écrire à l'adresse : Digital Governance Director, Diageo Plc, Lakeside Drive, Park Royal, London NW10 7HQ, Royaume-Uni.</p>
                                
                                <h2>11. Autorisation large</h2>
                                <p>Si vous avez accepté de recevoir des communications sur les marques Diageo en général (en acceptant, par exemple, de recevoir par courriel des nouvelles et les offres spéciales relatives aux autres grandes marques de boissons alcoolisées de Diageo), il se peut que vous receviez de temps à autre des messages concernant des marques pour lesquelles vous ne vous êtes pas prononcé explicitement. Vous trouverez des renseignements sur plusieurs marques de Diageo à l'adresse www.diageobrands.com.</p>
                                <p>Il peut arriver que nous vous envoyions des messages relatifs à des marques absentes du site www.diageobrands.com (dans le cas des nouvelles marques, par exemple). Nous vous conseillons de vous rendre de temps en temps sur le site www.diageobrands.com, car la liste des marques à la une change régulièrement.</p>
                                <p>Le fait de nous autoriser à communiquer avec vous au sujet de nos marques ne signifie pas que vous allez recevoir des messages concernant toutes les marques de Diageo. Nous communiquerons avec vous uniquement au sujet des marques que nous jugerons susceptibles de vous intéresser. À chaque message, vous aurez la possibilité de vous désabonner des communications relatives à la marque en question et/ou de toutes les communications au sujet des marques de Diageo.</p>
                                <p>Pour toute question liée à la confidentialité, ou pour formuler une plainte, écrivez à l'adresse : Data Privacy Officer, Corporate Centre Legal Team, Diageo plc, Lakeside Drive, London, NW10 7HQ, Royaume-Uni.</p>
                                
                                <h2>12.  Interfaces avec les sites Web de tiers</h2>
                                <p>Le site peut contenir des liens, des références et du contenu provenant d'autres sites Web hors de notre contrôle. Sachez que nous avons peu de contrôle, voire aucun, sur ces sites et que notre Avis relatif à la confidentialité et aux témoins ne s'applique pas à ces derniers. Nous vous encourageons à lire l'Avis relatif à la confidentialité et aux témoins et les Conditions générales de tous les sites Web que vous visitez à partir de liens et de références sur notre site.</p>
                                <p>Dans les régions où nous exerçons des activités, les autres obligations exigées par la loi, le cas échéant, seront intégrées à cet Avis relatif à la confidentialité et aux témoins. Aucun élément de cet Avis relatif à confidentialité et aux témoins, ou autre, ne permet d'engendrer ou d'ajouter un droit ou une revendication (légal, équitable ou autre) à ceux dont un individu ou une personne peut se prévaloir en droit ou autre à l'encontre de la société ou d'un tiers, ou d'un de leurs directeurs, cadres, employés, agents ou représentants (collectivement appelés le « Groupe Diageo »). L'existence de cet Avis relatif à la confidentialité et aux témoins, ou son application, n'impose pas et n'ajoute pas non plus pour le Groupe Diageo de nouvelles obligations ou responsabilités en plus de celles qui lui incombent déjà par la loi.</p>
                                <p>© 2012 Diageo Plc, Lakeside Drive, Park Royal, London NW10 7HQ, Royaume-Uni (enregistrée en Angleterre et au pays de Galles sous le numéro 23307) Tous droits réservés. Version 9.2 du 6 mars 2012</p>                                                
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
