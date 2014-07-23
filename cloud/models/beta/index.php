<?php

	//include main functionity (DB connect, etc)
	require_once($_SERVER['DOCUMENT_ROOT'].'cloud/models/main/index.php');
	
	function betaSignup($email){

		dbQuery("INSERT INTO beta (email) VALUES ('$email')");
		$resp  = array("status"=>"success", "reason"=>"email added to beta");
		return($resp);
	}
	




?>