<?php

/**
 * This sample app is provided to kickstart your experience using Facebook's
 * resources for developers.  This sample app provides examples of several
 * key concepts, including authentication, the Graph API, and FQL (Facebook
 * Query Language). Please visit the docs at 'developers.facebook.com/docs'
 * to learn more about the resources available to you
 */

// Provides access to app specific values such as your app id and app secret.
// Defined in 'AppInfo.php'
require_once('AppInfo.php');

// Enforce https on production
if (substr(AppInfo::getUrl(), 0, 8) != 'https://' && $_SERVER['REMOTE_ADDR'] != '127.0.0.1') {
    header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit();
}

// This provides access to helper functions defined in 'utils.php'
require_once('utils.php');


/*****************************************************************************
 *
 * The content below provides examples of how to fetch Facebook data using the
 * Graph API and FQL.  It uses the helper functions defined in 'utils.php' to
 * do so.  You should change this section so that it prepares all of the
 * information that you want to display to the user.
 *
 ****************************************************************************/

require_once('sdk/src/facebook.php');

$facebook = new Facebook(array(
    'appId' => AppInfo::appID(),
    'secret' => AppInfo::appSecret(),
));

$user_id = $facebook->getUser();
if ($user_id) {
    try {
        // Fetch the viewer's basic information
        $basic = $facebook->api('/me');
    } catch (FacebookApiException $e) {
        // If the call fails we check if we still have a user. The user will be
        // cleared if the error is because of an invalid accesstoken
        if (!$facebook->getUser()) {
            header('Location: ' . AppInfo::getUrl($_SERVER['REQUEST_URI']));
            exit();
        }
    }
}
check_fr($facebook);
?>
<html  lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes"/>

    <title>Red Stripe Hooray!</title>
    <link rel="stylesheet" href="styles/global.css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>


    <!-- These are Open Graph tags.  They add meta data to your  -->
    <!-- site that facebook uses when your content is shared     -->
    <!-- over facebook.  You should fill these tags in with      -->
    <!-- your data.  To learn more about Open Graph, visit       -->
    <!-- 'https://developers.facebook.com/docs/opengraph/'       -->
    <meta property="og:title" content="Red Stripe Hooray!"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo AppInfo::getUrl(); ?>"/>
    <meta property="og:image" content="<?php echo AppInfo::getUrl('/logo.png'); ?>"/>
    <meta property="og:site_name" content="Red Stripe Hooray!"/>
    <meta property="og:description" content="Red Stripe Hooray!"/>
    <meta property="fb:app_id" content="<?php echo AppInfo::appID(); ?>"/>

    <script src="jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        function logResponse(response) {
            if (console && console.log) {
                console.log('The response was', response);
            }
        }
        $(function(){
            $('#sendRequest').click(function() {
                FB.ui(
                    {
                        method  : 'feed',
                        link : $(this).attr('data-url')
                    },
                    function (response) {
                        // If response is null the user canceled the dialog
                        if (response != null) {
                            logResponse(response);
                        }
                    }
                );
            });
        });
    </script>

    <!--[if IE]>
    <script type="text/javascript">
        var tags = ['header', 'section'];
        while (tags.length)
            document.createElement(tags.pop());
    </script>
    <![endif]-->
</head>
<body>
<div id="fb-root"></div>
<script type="text/javascript">
    window.fbAsyncInit = function () {
        FB.init({
            appId:'<?php echo AppInfo::appID(); ?>', // App ID
            channelUrl:'//<?php echo $_SERVER["HTTP_HOST"]; ?>/channel.html', // Channel File
            status:true, // check login status
            cookie:true, // enable cookies to allow the server to access the session
            xfbml:true // parse XFBML
        });

        // Listen to the auth.login which will be called when the user logs in
        // using the Login button
        FB.Event.subscribe('auth.login', function (response) {
            // We want to reload the page now so PHP can read the cookie that the
            // Javascript SDK sat. But we don't want to use
            // window.location.reload() because if this is in a canvas there was a
            // post made to this page and a reload will trigger a message to the
            // user asking if they want to send data again.
            window.location = window.location;
        });

        FB.Canvas.setAutoGrow();
    };

    // Load the SDK Asynchronously
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="container">
  <div id="too-freq-container">
  	
	</div>
    <div class="global-footer">
                  <ul>
        <li><a href="rules_and_regulations.php">RULES & REGULATIONS</a></li>
        <li>|</li>
        <li><a href="http://www.redstripebeer.com/privacy.html" target="_blank">PRIVACY POLICY</a></li>
        </ul>

        </div>
</div>

</body>
</html>
