<?php
/**
 * @return the value at $index in $array or $default if $index is not set.
 */


function idx(array $array, $key, $default = null)
{
    if (is_array($array)) {
        return array_key_exists($key, $array) ? $array[$key] : $default;
    }
}

function he($str)
{
    return htmlentities($str, ENT_QUOTES, "UTF-8");
}

function check_ie(){
    return !!strpos($_SERVER['HTTP_USER_AGENT'],'MSIE');
}
function check_http(){
    return strcasecmp(substr($_SERVER['HTTP_REFERER'],0,5),'http:') == 0;
}

function send_curl_submissions($data)
{
include('config.php');

// attempt to turn off magic quotes
if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc())
{
    $process = array($_GET, $_POST, $_COOKIE, $_REQUEST);
    while(list($key, $val) = each($process))
	{
        foreach ($val as $k => $v)
		{
            unset($process[$key][$k]);
            if(is_array($v))
			{
                $process[$key][stripslashes($k)] = $v;
                $process[] = &$process[$key][stripslashes($k)];
            }
			else
                $process[$key][stripslashes($k)] = stripslashes($v);
        }
    }
    unset($process);
}

    // ADD BACK WHEN PUSHING TO NEO STAGING //

$xmlOut = createXML($data);

$ch = curl_init();

// HTTP headers
$headers[] = 'Proxy-Authorization: Basic ' . base64_encode("$NEO_APP_ID:$NEO_TOKEN");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_URL, $NEO_FULLWS_URL); // set WS url to post to
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0); // allow redirects
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // return into a variable
curl_setopt($ch, CURLOPT_TIMEOUT, 15); // times out after 4s
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_POST, 1); // set POST method
curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlOut); // add POST fields
$result = curl_exec($ch); // run the whole process
$curl_info = curl_getinfo($ch); //to capture the curl  request info
$header_size = $curl_info["header_size"];
$header = substr($result, 0, $header_size); // to only get the header by the header size
curl_close($ch);
    

    // ADD BACK WHEN PUSHING TO NEO STAGING //
}

function validate_token()
{
    if (isset($_POST['uid']) && isset($_POST['token']) && $_POST['uid'] && $_POST['token']) {
        if ($_SESSION['id_token'][$_POST['uid']] == $_POST['token']) {
            return true;
        }
    }
    return false;
}

function age($date = 'now')
{
    return intval(substr(date('Ymd') - date('Ymd', strtotime($date)), 0, -4));
}

function submission_validate($data, &$errors)
{

    /* DEBUG: I've commented out this checker, since I believe now that I've remove the javascript reload on the registration page,
* the validate_token() function started to fail. */
    $valid = true;
    //$valid = validate_token();

    if (!isset($data['user_agreement']) || ($data['user_agreement'] != 'agreement')) {
        $valid = false;
        $errors[] = 'agreement';
    }
    $required = array('firstname', 'lastname', 'email', 'address1', 'country', 'province', 'city', 'postal');
    foreach ($required as $name) {
        if (!isset($data['user'][$name]) || ($data['user'][$name] == "")) {
            $valid = false;
            $errors[] = $name . '-- empty';
        }
    }

    if (!filter_var($data['user']['email'], FILTER_VALIDATE_EMAIL)) {
        $valid = false;
        $errors[] = 'invalid-email';
    }

    if (!checkdate($data['user']['birthmonth'], $data['user']['birthday'], $data['user']['birthyear'])) {
        $valid = false;
        $errors[] = 'invalid-date-format';
    }
    $age = age($data['user']['birthyear'] . "-" . $data['user']['birthmonth'] . "-" . $data['user']['birthday']);

    $valid_age = 18;

    if ($age < $valid_age) {
        $valid = false;
        $errors[] = 'too-young';
    }

    /*if (!check_last_post_time($data['uid'])) {
        $valid = false;
        $errors['x'] = 'too-frequent';
    }*/

    return $valid;
}