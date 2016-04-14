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
<body class="rules">

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
                <div class="small-12  columns">                        
                    <h1>RÈGLEMENT OFFICIEL</h1>

                    <p>AUCUN ACHAT NI PAIEMENT N'EST REQUIS POUR S'INSCRIRE OU POUR GAGNER À CE CONCOURS. EFFECTUER UN ACHAT N'AMÉLIORERA PAS VOS CHANCES DE GAGNER. LE PRÉSENT CONCOURS EST OUVERT À TOUT RÉSIDENT LÉGAL DU QUÉBEC ET SERA INTERPRÉTÉ EN FONCTION DES LOIS DU CANADA. VOUS DEVEZ ÊTRE ÂGÉ DE 18 ANS OU PLUS POUR Y PARTICIPER.</p>                
                    
                    <ol> 
                        <li><strong>ADMISSIBILIT&Eacute; :</strong> 
                            Le concours SAVOUREZ LE FROID (ci-après, <strong>« le concours »</strong>) est ouvert à tout résident légal du Québec âgé de 18 ans ou plus au moment de s'y inscrire. Pour être admissible à gagner au concours, le participant ne doit pas être dirigeant, administrateur, employé, agent, représentant, ou membre de la famille immédiate (c'est-à-dire : parent, frère ou sœur, enfant et/ou époux, peu importe où il réside) ni membre du foyer (peu importe s'il existe un lien de parenté ou pas) d'un dirigeant, administrateur, employé, agent ou représentant de Diageo Canada Inc. (ci-après, l' <strong>« organisateur »</strong>), de Bell Media Mix, une filiale de Bell Media Inc., ou de leurs agences publicitaires ou promotionnelles respectives, d'un organisme indépendant chargé de juger le concours, de leurs sociétés-mères ou affiliées, de fournisseurs de matériel ou de services associés au concours, des régies et commissions d'alcool et leurs agences et succursales, détaillants, grossistes ou distributeurs de boissons alcooliques ou détenteurs de permis de vente d'alcool (ci-après, les <strong>« sociétés des alcools »</strong>). L'organisateur, ses agences publicitaires et promotionnelles, l'organisme indépendant chargé de juger le concours, Bell Media Inc., les sociétés des alcools, les sociétés-mères, filiales, sociétés et entités affiliées de ces organismes, ainsi que leurs dirigeants, administrateurs, propriétaires, employés, agents, représentants et ayants droit seront appelés collectivement les « entités du concours ». Les sociétés des alcools ne participent d'aucune façon à ce concours et n'assument aucune responsabilité relativement à tout fait ou événement lié à ce concours.</li>
                        <br>&nbsp;<br>
                        
                        <li><strong>DUR&Eacute;E DU CONCOURS :</strong> 
                            Le concours débute le 31 janvier 2016 à 0h01 HNE et se termine le 26 mars 2016 à 23h59 HNE (ci-après la <strong>« durée du concours »</strong>). Afin d’être déclarées admissibles, les participations (telles qu’elles sont définies plus bas) doivent être reçues par l’organisateur pendant la durée du concours. Une preuve d’envoi d’une soumission ne constitue pas une preuve qu’elle a été reçue par l’organisateur.</li>
                        <br>&nbsp;<br>
                        
                        <li><strong>MODALITÉS D'INSCRIPTION :</strong> 
                        <p><strong>Pour vous inscrire avec un NIP imprimé sur une collerette</strong> : Tout au long de la durée du concours, obtenez votre numéro d’identification personnel unique (ci-après, <strong>« NIP »</strong>) dans les succursales participantes de la SAQ sur les collerettes fixées sur les bouteilles de crème irlandaise ®TM/MC Original de 750 mL ou 1,14L, ou de crème irlandaise Baileys TM/MC Vanille cannelle, de crème irlandaise Baileys TM/MC Chocolat cerise ou de crème irlandaise Baileys TM/MC Caramel salé au format de 750 mL (jusqu’à épuisement des stocks).</p>
                        <p><strong>Inscription sans achat</strong> : Pour obtenir un NIP sans faire d’achat, écrivez clairement votre nom et prénom, adresse postale, téléphone où l’on peut vous joindre pendant la journée et votre date de naissance sur une feuille de papier vierge (dont les dimensions ne dépassent pas 8,5 x 11 po) accompagné d’une enveloppe adressée à votre nom et préaffranchie et envoyez le tout dans une enveloppe suffisamment affranchie à TRAFFIKGROUP, 559 College Street, Suite 302, Toronto, (Ontario) M6G 1A9 ATTENTION : Concours « Savourez le froid ». L’organisateur vous fera parvenir par poste régulière un (1) NIP pour vous permettre de vous inscrire au concours, dans les limites des NIP disponibles. Limite d’une participation sans achat par semaine, et les demandes doivent être reçues avant le 21 mars 2016 pour permettre suffisamment de temps au traitement.</p>
                        <p>Pour vous inscrire au concours, visitez le www.savourezlefroid.com (ci-après, le <strong>« site Web du concours »</strong>) et suivez les instructions pour participer au concours. Vous devrez remplir le formulaire d’inscription qui s’y trouve (ci-après, le <strong>« formulaire d’inscription »</strong>) et y inscrire entre autres votre nom, adresse, âge, numéro de téléphone et adresse courriel (le cas échéant) et un (1) NIP valide. Vous devrez également confirmer que vous avez compris le présent règlement et que vous acceptez de le respecter. Une fois terminé, cliquez « soumettre » et vous recevrez ainsi une participation (ci-après, une <strong>« participation »</strong>, et collectivement des « participations ») au concours. Tous les champs indiqués sur le formulaire doivent être remplis, sauf les champs indiqués comme étant facultatifs. Chaque fois qu’un participant soumet une participation accompagnée d’un NIP unique, il est automatiquement inscrit au tirage pour le prix hebdomadaire de la semaine correspondante (rapportez-vous à l’article 5 pour connaître les dates des périodes hebdomadaires). Limite d’une participation par personne, par jour. Les participations gagnantes et non gagnantes pour le tirage des prix hebdomadaires seront inscrites au tirage pour les grands prix qui aura lieu à la fin du concours. L’horloge de l’organisateur sera l’horloge officielle du concours, et fera foi en ce qui a trait à la détermination de la date et de l’heure à laquelle une participation a été soumise.</p>
                        <p>Votre participation sera rejetée si (à la discrétion absolue de l'organisateur) le formulaire d'inscription n'est pas rempli au complet et n'indique pas les renseignements demandés et s'il n'est pas soumis pendant la durée du concours. L'utilisation (ou la tentative d'utilisation) de noms, d'identités ou d'adresses courriel multiples est interdite; toute participation envoyée par le biais de méthodes automatisées, robots, scripts, macros ou autres services automatisés, et toute utilisation de ces moyens pour participer au concours ou pour perturber son bon fonctionnement est interdite et tout participant s'adonnant à ces activités pourrait être disqualifiée par l'organisateur.</p>
                        </li>                        
                        <br>&nbsp;<br>
                        
                        <li><strong>PRIX :</strong> 
                        <p>Il y a cent (100) prix à gagner, ci-après individuellement ou collectivement le ou les <strong>« prix »</strong>). Trente-deux (32) prix seront distribués en prix hebdomadaires (8 semaines à raison de 4 prix par semaine, ci-après les « prix hebdomadaires », chacun étant un « prix hebdomadaire ») et soixante-huit (68) prix qui seront attribués à la fin du concours (ci-après les « grands prix », chacun étant un <strong>« grand prix »</strong>).</p>                        
                        <p><strong>Prix hebdomadaires </strong> Chaque prix hebdomadaire est composé d’un (1) jeté portant la marque Baileys TM/MC. La valeur approximative au détail de chaque prix hebdomadaire est de 90,00 $.</p>
                        <p><strong>Grands prix :</strong> Chaque grand prix est composé d’un (1) foyer portatif portant la marque Baileys TM/MC. La valeur approximative au détail de chaque grand prix est de 150,00 $.</p>
                        <p>Les prix ne peuvent être transférés et doivent être acceptés tels qu’ils sont accordés, et ne peuvent être échangés contre une somme d’argent ou quoi que ce soit d’autre. L’organisateur se réserve le droit, à sa seule discrétion et à tout moment, d’accorder un prix (ou un de ses éléments) d’une valeur monétaire supérieure ou égale au prix annoncé. L’organisateur n’offre aucune garantie, quelle qu’elle soit, en ce qui a trait aux prix. Les prix ne comportent aucune boisson alcoolique.</p>                                                
                        </li>
                        <br>&nbsp;<br>

                        <li><strong>TIRAGE ET NOTIFICATION :</strong>
                        <p><strong>Grands prix :</strong> Soixante-huit (68) participations seront choisies lors de soixante-huit (68) tirages au sort qui auront lieu environ le 6 avril 2016 (ci-après, le <strong>« tirage pour le grand prix »</strong>) à TRAFFIKGROUP, 559, rue College, bureau 302, Toronto (Ontario) M6G 1A9 à environ 12h00 HE parmi toutes les participations admissibles reçues pendant la durée du concours. Les chances de gagner un grand prix dépendent du nombre de participations admissibles reçues pendant la durée du concours mais ne dépasseront pas 1 sur 40 000 pour chaque grand prix. Le participant sélectionné pour gagner un grand prix ne pourra se voir attribuer un autre grand prix.</p>
                        <p><strong>Prix hebdomadaires :</strong> Les tirages pour les prix hebdomadaires auront lieu à environ 12h00 HE à TRAFFIKGROUP, 559, rue College, bureau 302, Toronto (Ontario) M6G 1A9, aux dates indiquées plus bas (ci-après individuellement, un <strong>« tirage pour le prix hebdomadaire »</strong> et collectivement, les « tirages pour les prix hebdomadaires »). À chaque tirage, les noms de quatre (4) participants seront sélectionnés comme gagnants potentiels d’un prix hebdomadaire parmi toutes les participations admissibles reçues au cours de la période hebdomadaire correspondante (définie plus bas). Ces périodes d’inscription (ci-après, « période hebdomadaire ») et leur date de tirage sont les suivantes : </p>
                        <ul><li>
                        <table border="1" style="border: 1px solid #FFF;">
                            <tr style="border: 1px solid #FFF;">
                                <td style="border: 1px solid #FFF;" width="15%"><strong>Tirage #</strong></td>
                                <td style="border: 1px solid #FFF;" width="28%"><strong># Début de la période</strong></td>
                                <td style="border: 1px solid #FFF;" width="28%"><strong>Fin de la période</strong></td>
                                <td style="border: 1px solid #FFF;" width="28%"><strong>Date du tirage</strong></td>                                                                
                            </tr>

                            <tr>
                                <td style="border: 1px solid #FFF;" width="15%">1</td>
                                <td width="28%">31 janvier, 0h00 HNE</td>
                                <td width="28%">6 février, 23h59 HNE</td>
                                <td width="28%">7 février, 12h00 HNE</td>                                                                
                            </tr>

                            <tr>
                                <td width="15%">2</td>
                                <td width="28%">7 février, 0h00 HNE</td>
                                <td width="28%">13 février, 23h59 HNE</td>
                                <td width="28%">14 février, 12h00 HE</td>                                                                
                            </tr>

                            <tr>
                                <td width="15%">3</td>
                                <td width="28%">14 février, 0h00 HNE</td>
                                <td width="28%">20 février, 23h59 HNE</td>
                                <td width="28%">21 février, 12h00 HNE</td>                                                                
                            </tr>    

                            <tr>
                                <td width="15%">4</td>
                                <td width="28%">21 février, 0h00 HNE</td>
                                <td width="28%">27 février, 23h59 HNE</td>
                                <td width="28%">28 février, 12h00 HNE</td>                                                                
                            </tr>                                                                                                            

                            <tr>
                                <td width="15%">5</td>
                                <td width="28%">28 février, 0h00 HNE</td>
                                <td width="28%">5 mars, 23h59 HNE</td>
                                <td width="28%">6 mars, 12h00 HNE</td>                                                                 
                            </tr>                            

                            <tr>
                                <td width="15%">6</td>
                                <td width="28%">6 mars, 0h00 HNE</td>
                                <td width="28%">12 mars, 23h59 HNE</td>
                                <td width="28%">13 mars, 12h00 HNE</td>                                                                 
                            </tr>   

                            <tr>
                                <td width="15%">7</td>
                                <td width="28%">13 mars, 0h00 HNE</td>
                                <td width="28%">19 mars, 23h59 HNE</td>
                                <td width="28%">20 mars, 12h00 HNE</td>                                                                 
                            </tr>   

                            <tr>
                                <td width="15%">8</td>
                                <td width="28%">20 mars, 0h00 HNE</td>
                                <td width="28%">26 mars, 23h59 HNE</td>
                                <td width="28%">27 mars, 12h00 HNE</td>                                                                 
                            </tr>                                                           
                        </table>
                            <p>Les chances de gagner un prix hebdomadaire dépendent du nombre de participations admissibles reçues pendant chaque période hebdomadaire, mais ne dépasseront pas 1 sur 40 000. Un gagnant confirmé d’un prix hebdomadaire ne pourra se voir attribuer un autre prix hebdomadaire. Un gagnant confirmé d’un prix hebdomadaire pourra cependant continuer à soumettre des participations dans le cadre du présent concours, mais elles seront inscrites uniquement au tirage des grands prix, et non des prix hebdomadaires de la semaine correspondante. Limite d’une (1) participation par personne par jour.</p>
                            <p>Les participants sélectionnés seront prévenus par téléphone et/ou par courriel dans un délai d’environ quarante-huit (48) heures suivant la date de tirage correspondante, au numéro de téléphone et/ou à l’adresse courriel fournie par le participant au moment de s’inscrire au concours. Merci de vérifier vos courriels et votre dossier de pourriels. Aucune communication ne sera engagée sauf avec le(s) participant(s) sélectionné(s). Avant d’être déclaré gagnant, le participant sélectionné devra répondre correctement à une question d’habileté mathématique à temps limité sans assistance mécanique ou autre, laquelle question lui sera posée par téléphone à un moment mutuellement acceptable. Le participant sélectionné devra également remplir et retourner à l’organisateur (ou à son agent autorisé) une déclaration de conformité et une exonération à des fins publicitaires (ci-après, une « déclaration et exonération ») dans les délais précisés par l’organisateur, dans laquelle, entre autres, le participant sélectionné : (a) confirme qu’il a respecté le présent règlement du concours; (b) confirme que le grand prix lui a bel et bien été accordé; (c) libère les entités du concours de toute responsabilité juridique dans le cadre du concours, ou découlant du fait d’y avoir participé ou d’avoir reçu le prix ou d’en avoir fait une bonne ou mauvaise utilisation; et (d) consente à ce que son nom, adresse, voix, déclarations au sujet du présent concours, et/ou son image et tout autre portrait, soient publiés, reproduits ou utilisés à toute fins, y compris mais sans s’y restreindre, à des fins publicitaires ou promotionnelles effectuées par l’organisateur ou pour sa part, de quelque manière que ce soit, y compris dans les médias imprimés, télévisuels ou sur Internet.</p>
                            <p>S’il s’avère impossible de joindre le participant sélectionné, ou si ce dernier ne remplit pas, ne signe pas ou ne retourne pas la déclaration et exonération ou toute autre documentation exigée dans les dix (10) jours ouvrables après avoir été prévenu, ou si la notification ne peut être livrée, ou s’il ne fournit pas de preuve d’admissibilité (si elle lui est demandée), ou en cas de non-respect du présent règlement du concours, le participant sélectionné pourra perdre automatiquement le droit de réclamer le prix, et l’organisateur se réserve le droit d’effectuer un nouveau tirage parmi les participations admissibles selon les mêmes modalités. Si le participant sélectionné ne répond pas correctement à la question d’habileté mathématique, il pourrait être disqualifié, perdre le droit de réclamer le prix, et l’organisateur se réserve le droit d’effectuer un nouveau tirage parmi les participations admissibles selon les mêmes modalités L’organisateur fera parvenir les grands prix et les prix hebdomadaires aux gagnants dans un délai de 3-4 semaines.</p>                                                                                                                                          
                        </li></ul>                        
                        </li>
                        <br>&nbsp;<br>

                        <li><strong>DONNÉES PERSONNELLES :</strong>                         
                        <p>L’organisateur et ses agents autorisés recueillent, utilisent et divulguent les données personnelles que vous fournissez au moment de vous inscrire au concours afin de gérer le concours et pour distribuer les prix. Par le fait même de participer au concours, vous consentez à la collecte, à l’utilisation, à la divulgation et à la gestion de vos données personnelles à ces fins. Vous aurez également peut-être la possibilité de recevoir des communications supplémentaires de la part de l’organisateur sur les promotions en cours et sur ses produits et services. Vous ne recevrez ces communications qui si vous signifiez vouloir les recevoir au moment de vous inscrire au concours. Les participants qui optent de recevoir de type de communication pourront y mettre fin à tout moment. Par le fait même de vous inscrire au concours, vous consentez à la collecte, à l’utilisation, à la divulgation et à la gestion de vos données personnelles pour ces fins, et tel qu’il est stipulé dans la déclaration de confidentialité de l’organisateur, en ligne à l’adresse :
                        <a href="http://www.diageo.com/en-row/Pages/privacypolicy.aspx" target="_blank">http://www.diageo.com/en-row/Pages/privacypolicy.aspx</a></p>
                        <br><p>Par le fait même d’accepter le grand prix, le gagnant consent à ce que son nom, son adresse (ville et province), son image, son portrait biographique, sa voix, ses déclarations au sujet du présent concours, ainsi que son image et tout autre portrait, soient publiés, reproduits ou utilisés à toute fins, y compris mais sans s’y restreindre, à des fins publicitaires ou promotionnelles effectuées par l’organisateur ou une partie affiliée au présent concours, dans tout média et tout format existant ou développé à l’avenir, y compris mais sans s’y restreindre l’Internet, maintenant et à l’avenir, et ce, sans autorisation préalable et sans rémunération.</p>
                        <br>&nbsp;<br></li>

                        <li><strong>LIMITATIONS ET EXONÉRATIONS DE RESPONSABILITÉ JURIDIQUE :</strong> 
                        PAR LE FAIT MÊME DE PARTICIPER AU CONCOURS, LES PARTICIPANTS ACCEPTENT QUE LA RESPONSABILITÉ JURIDIQUE DES ENTITÉS DU CONCOURS NE SAURAIT ÊTRE AUCUNEMENT ENGAGÉE, ET INDEMNISENT ET RENONCENT À TOUTE RÉCLAMATION OU ACTION EN JUSTICE À L’ENDROIT DES ENTITÉS DU CONCOURS POUR BLESSURES, PERTES OU DOMMAGES (Y COMPRIS LES DOMMAGES DIRECTS, INDIRECTS, ACCESSOIRES, CONSÉCUTIFS OU PUNITIFS) CORPORELS OU À LA PROPRIÉTÉ, DÉCOULANT OU RÉSULTANT DE : A) L’INSCRIPTION OU LA PARTICIPATION AU CONCOURS OU À TOUTE ACTIVITÉ CONNEXE AU CONCOURS, Y COMPRIS L’ACCÈS À LA PAGE WEB DU CONCOURS ET SON UTILISATION; B) TOUTE RÉCLAMATION FONDÉE SUR LES DROITS À LA BONNE RÉPUTATION ET À LA VIE PRIVÉE, LA DIFFAMATION OU LA LIVRAISON DE MARCHANDISES OU C) LE FAIT D’ACCORDER, D’ACCEPTER, DE POSSÉDER OU DE FAIRE UNE BONNE OU UNE MAUVAISE UTILISATION D’UN PRIX. Certaines juridictions ne permettent pas l’exclusion ni la limitation de dommages accessoires ou consécutifs, donc cette exclusion pourrait ne pas s’appliquer dans votre cas.
                        <p>Sans limiter la portée de ce qui précède, les entités du concours ne seront aucunement responsables en cas de : (a) données inexactes ou incomplètes causées par les utilisateurs de le site Web du concours, ou par l’équipement ou la programmation associée au concours ou utilisée dans sa gestion, ou par une erreur technique ou humaine qui pourrait survenir au cours du traitement des soumissions au concours; (b) réseaux, serveurs, fournisseurs de services, systèmes informatiques, réseau ou lignes téléphoniques ou toute autre connexion perdus, interrompus ou non disponibles; (c) vol, de destruction, de perte, de modification ou d’accès non autorisé aux participations; (d) problèmes, défaillances ou dérangements de lignes ou réseaux téléphoniques, de serveurs ou de fournisseurs, de matériel informatique, de logiciels, de bogues ou de virus; (e) transmissions incompréhensibles ou incorrectement interprétées; (f) l’échec dans la livraison ou la réception d’un courriel par un organisme indépendant chargé de juger le concours ou l’organisateur pour quelque raison que ce soit, y compris mais sans s’y restreindre, en cas de congestion sur Internet, sur un site Web ou un combinaison de ces facteurs ou une incompatibilité technique; (g) dommage subi par le matériel informatique d’un utilisateur (matériel ou logiciel) occasionné par la participation au présent concours ou le téléchargement de matériel dans le cadre du concours; (h) erreurs d’impression, de distribution, de programmation ou de production, et de toute autre erreur ou défaillance de toute nature, qu’elles soient humaine, mécanique, électronique ou autre; ou (i) erreurs ou omissions techniques, pictographiques, typographique ou autre dans la présente.</p>
                        <br>&nbsp;<br></li>

                        <li><strong>DISPOSITIONS G&Eacute;N&Eacute;RALES :</strong> 
                        <p>Par le fait même de s’inscrire au concours, les participants acceptent de respecter le règlement officiel du concours ainsi que les décisions de l’organisateur, lesquelles sont finales en tout ce qui a trait au concours. .</p>
                        <p>Le présent concours est assujetti aux lois fédérales, provinciales et municipales applicables. Nul là où la loi l’interdit. Toute participation devient la propriété de l’organisateur, et ne sera pas retournée au participant. Les participations sont assujetties à vérification à tout moment. Toute participation envoyée par le biais de méthodes automatisées (y compris, mais sans s’y restreindre, les participations en masse, les participations soumises par l’entremise de robots, scripts, macros ou service d’inscription), les copies, les participations soumises par un tiers, les fac-similés et/ou les reproductions mécaniques ne sont pas permises et seront disqualifiées. L’organisateur ne sera aucunement responsable des participations ou des inscriptions sans achat retardées, perdues, illisibles, ou incomplètes. TOUTE TENTATIVE PAR UN PARTICIPANT D’ENDOMMAGER DÉLIBÉRÉMENT LE SITE WEB DU CONCOURS OU DE PERTURBER LE BON DÉROULEMENT DU PRÉSENT CONCOURS CONTREVIENT AU CODE CRIMINEL ET AUX LOIS CIVILES; LE CAS ÉCHÉANT, L’ORGANISATEUR SE RÉSERVE LE DROIT D’APPLIQUER DES RECOURS ET DE RÉCUPÉRER DES DOMMAGES-INTÉRÊTS DANS LA MESURE PERMISE PAR LA LOI, NOTAMMENT AU MOYEN DE POURSUITES AU CRIMINEL. L’organisateur se réserve le droit, à sa seule discrétion, de disqualifier tout participant qu’il juge être : engagé à détourner le procédé d’inscription, le bon fonctionnement du présent concours ou de le site Web du concours; en contravention des modalités publiées sur le site Web du concours; en contravention du présent règlement du concours; ou en train de se comporter de manière antisportive ou de manière à perturber autrui, ou dans l’intention d’importuner, de tourmenter, de menacer ou de harceler autrui. L’organisateur se réserve le droit, à sa seule et unique discrétion, d’exiger une preuve d’identité ou d’admissibilité (sous une forme acceptable à l’organisateur, y compris, mais sans s’y restreindre, une pièce d’identité avec photo délivrée par un gouvernement) comme condition à la participation au présent concours. Si cette preuve n’est pas présentée de manière opportune et à la satisfaction de l’organisateur, le participant risquerait de se voir disqualifier. Dans l’éventualité où l’identité d’un participant ayant soumis une inscription serait remise en question, l’inscription gagnante sera réputée avoir été transmise par le titulaire autorisé du compte de l’adresse courriel au moment de l’inscription. Par « titulaire autorisé du compte », nous entendons la personne naturelle à qui une adresse courriel a été attribuée par un fournisseur d’accès Internet ou un autre organisme chargé d’attribuer des adresses courriel pour le compte associé à l’adresse courriel en question. Le gagnant potentiel pourrait être tenu de présenter une preuve comme quoi il est le véritable titulaire autorisé du compte. Avec l’approbation de la Régie des alcools, des courses et des jeux, l’organisateur se réserve le droit de modifier ou d’apporter des changements au présent règlement et de suspendre, de modifier ou de terminer le présent concours, en tout ou en partie, à tout moment et sans préavis ni obligation, pour quelque raison que ce soit, y compris mais sans s’y restreindre, en cas de piratage, de bogues, de fraude, d’intervention non autorisée, d’erreurs de programmation, de défaillances techniques ou d’infection par un virus informatique. En cas de divergence entre les conditions énumérées dans le présent règlement officiel et tout autre énoncé figurant sur le matériel du concours, y compris mais sans s’y restreindre : la page Web du concours, le matériel publicitaire au point de vente, télévisé, imprimé ou en ligne, les conditions énumérées au présent règlement officiel prévaudront, régiront et auront préséance. L’organisateur se réserve le droit de corriger toute erreur typographique, d’impression, de programmation informatique ou humaine. Le fait que l’organisateur n’exige pas l’exécution d’une disposition contenue au présent règlement officiel ne doit pas être interprété comme une renonciation à un droit ni à l’exécution d’une disposition. Les dispositions des présentes sont autonomes et, si l’une d’entre elles est déclarée nulle, invalide ou inapplicable par un tribunal compétent, les autres dispositions continueront d’avoir plein effet, et le présent règlement sera interprété conformément aux termes qu’il renferme, comme si la disposition nulle ou invalide n’y figurait pas. Dans l’éventualité où un gagnant ferait une fausse déclaration dans un des documents cités dans le présent règlement, il sera tenu de retourner le grand prix à l’organisateur dans les plus brefs délais, ou de rembourser la valeur équivalente du grand prix.</p>                        
                        <p>Un différend quant à l’organisation ou au déroulement d’un concours publicitaire peut être soumis à la Régie des alcools, des courses et des jeux du Québec afin qu’il soit tranché. Un différend quant à l’attribution d’un prix peut être soumis à la Régie uniquement aux fins d’une intervention pour tenter de le régler.</p>
                        <p>En cas de divergence entre les versions française et anglaise du présent règlement, la version anglaise prévaudra.</p>
                        </li>
                    </ol>

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