<?php
// require_once('session_init.php');
// This provides access to helper functions defined in 'utils.php'
// require_once('AppInfo.php');
require_once ('utils.php');
require_once ('config.php');
$results = array();
$host = $DB_HOST;
$user = $DB_USER;
$pass = $DB_PASSWORD;
$dbname = $DB_NAME;
$port = $DB_PORT;
/*
 * Error Codes :
 * 100 - PIN has already been claimed
 * 200 - We are experiencing techincal difficulty
 * 300 - PIN has been entered incorreclty
 * 400 - We are experiencing techincal difficulty
 * 600 - We are experiencing techincal difficulty
 */

// function newsletter_opt_in($conn) {

// 	try {
// 		$stmt = $conn -> prepare('INSERT INTO optins (firstname,lastname,email,postal,checked,favourite_team) ' . ' VALUES(:first_name,:last_name,:email,:postal,:user_subscribe_nhl,:favourite_team)');
// 		$stmt -> bindParam(':first_name', $_POST['user']['firstname']);
// 		$stmt -> bindParam(':last_name', $_POST['user']['lastname']);
// 		$stmt -> bindParam(':email', $_POST['user']['email']);
// 		$stmt -> bindParam(':postal', $_POST['user']['postal']);
// 		$stmt -> bindParam(':user_subscribe_nhl', $_POST['user']['user_subscribe_nhl']);
// 		$stmt -> bindParam(':favourite_team', $_POST['user']['team']);

// 		if ($stmt -> execute()) {

// 			$conn = null;
// 			$result['success'] = true;
// 			echo json_encode($result);
// 			die();

// 		} else {
// 			$result['error'] = 'We are experiencing techincal difficulty';
// 		}
// 		$conn = null;
// 	} catch(PDOException $e) {
// 		$result['error'] = 'We are experiencing techincal difficulty';
// 		$conn = null;

// 		//echo 'response: ' . $e -> getMessage();
// 	}
// 	echo json_encode($result);

// }

function submit_user_data($conn) {
	//send_curl_submissions($_POST);
	//gfb_insert_submissions($_POST);
	try {
		$date = $_POST['user']['birthyear'] . '-' . $_POST['user']['birthmonth'] . '-' . $_POST['user']['birthday'];
		$stmt = $conn -> prepare('INSERT INTO user_pins (pin_number,first_name,last_name,email,address,address2,city,postal,country,province,birth_date,agree_rules,user_ip) ' . ' VALUES(:pin_number,:first_name,:last_name,:email,:address,:address2,:city,:postal,:country,:province,:birth_date,:agree_rules,:user_ip)');
		$stmt -> bindParam(':pin_number', $_POST['user']['pin']);
		$stmt -> bindParam(':first_name', $_POST['user']['firstname']);
		$stmt -> bindParam(':last_name', $_POST['user']['lastname']);
		$stmt -> bindParam(':email', $_POST['user']['email']);
		$stmt -> bindParam(':address', $_POST['user']['address1']);
		$stmt -> bindParam(':address2', $_POST['user']['address2']);		
		$stmt -> bindParam(':city', $_POST['user']['city']);
		$stmt -> bindParam(':postal', $_POST['user']['postal']);
		$stmt -> bindParam(':country', $_POST['user']['country']);
		$stmt -> bindParam(':province', $_POST['user']['province']);
		$stmt -> bindParam(':birth_date', $date);
		$stmt -> bindParam(':agree_rules', $_POST['user_agreement']);
		$stmt -> bindParam(':user_ip', $_SERVER['REMOTE_ADDR']);

		if ($stmt -> execute()) {
			$result['success'] = true;
			if (isset($_POST['user']['user_subscribe_nhl'])) {
				newsletter_opt_in($conn);
			} else {
				$conn = null;
				$result['success'] = true;
				echo json_encode($result);
				die();
			}

		} else {
			$result['error'] = 'We are experiencing techincal difficulty';
			echo json_encode($result);
		}

	} catch(PDOException $e) {
		$result['error'] = 'We are experiencing techincal difficulty';
		$conn = null;
		echo json_encode($result);
		//echo 'ERROR: ' . $e -> getMessage();
	}

}

if (submission_validate($_POST, $errors)) {

	try {
		$conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
		$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pin_test = $_POST['user']['pin'];
		$stmt = $conn -> prepare("SELECT * FROM pindatabase WHERE pin_number = :pin_number");
		$stmt -> bindParam(':pin_number', $pin_test);
		$stmt -> execute();

		if ($stmt -> rowCount() > 0) {
			$data = $stmt -> fetch();
			if ($data['pin_used']) {
				$result['error'] = 'Ce NIP a déjà été inscrit';
				echo json_encode($result);
				$conn = null;
			} else {
				$stmt = $conn -> prepare('UPDATE pindatabase SET pin_used = :pin_used WHERE id = :id');
				if ($stmt -> execute(array(':id' => $data['id'], ':pin_used' => '1'))) {
					submit_user_data($conn);

				} else {
					$result['error'] = 'We are experiencing techincal difficulty';
					$conn = null;
					echo json_encode($result);
				}
			}
		} else {
			$result['error'] = 'Vous avez des difficultés? <a href=rules_and_regulations.php target=_blank style=font-weight:normal;>Cliquez ici</a> Ce NIP a déjà été inscrit';
			$conn = null;
			echo json_encode($result);
		}

	} catch(PDOException $e) {
		$result['error'] = 'We are experiencing techincal difficulty';
		$conn = null;
		//echo 'response: ' . $e -> getMessage();
	}

}
