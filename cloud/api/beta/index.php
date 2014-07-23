<?php

		
	require_once($_SERVER['DOCUMENT_ROOT'].'cloud/models/beta/index.php');

	extract($_REQUEST);

	if(!isset($email)){

		$resp = array("status"=>"fail", "reason"=>"please send email");
		echo(json_encode($resp));
		return;
	}
	if(!isset($action)){

		$resp = array("status"=>"fail", "reason"=>"please send action");
		echo(json_encode($resp));
			return;
	}

	

	switch($action){

		case "signup":
			$resp = betaSignup($email);
			echo(json_encode($resp));
			return;

		break;

		default:
			$resp = array("status"=>"fail", "reason"=>"please send action that we have");
			echo(json_encode($resp));
		break;
	}






?>