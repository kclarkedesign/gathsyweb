<?php


	//show errors or not on this page
	//error_reporting(E_ALL);
	//ini_set('display_errors', 1);

	//import the settings functions from models folder
	require_once($_SERVER['DOCUMENT_ROOT'].'/cloud/models/settings/index.php');
	

	//get the user's resuest
	$inputArr = $_REQUEST;


	//start the session... For seeing if a user is logged in
	session_start();

	//convert request headers into php variables
	extract($_REQUEST);


	//check for required variables
	if(!isset($action)){

		$resp = array("status"=>"fail", "reason"=>"please send an action");
		echo(json_encode($resp));
		return;
	}
	if(!isset($email)){

		$resp = array("status"=>"fail", "reason"=>"please send an email");
		echo(json_encode($resp));
		return;
	}

	if(!isset($passwd)){

		$resp = array("status"=>"fail", "reason"=>"please send a passwd");
		echo(json_encode($resp));
		return;
	}

	
	//see the action and act accordingly

	switch($action){


		case "add":
			$resp = createAccount($inputArr);

			echo(json_encode($resp));
		break;


		case "login":
			$resp = loginUser($email, $passwd);

			echo (json_encode($resp));


		break;

		

		default:

			$resp = array("status"=>"fail", "reason"=>"please send a valid action");

			echo json_encode($resp);

		break;
	}

	


?>