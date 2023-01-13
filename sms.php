<?php
	session_start();

	$uname = "scentralspa102595@gmail.com";		//EMAIL
	$pword = "JasmineCute@25";		//PASSWORD
	$selectednums =  "09066062979";
	$message = urlencode("This Product is not available for now");
	
	sendSMS($uname, $pword, $selectednums, $message);
	
	function sendSMS($uname, $pword, $selectednums, $message){
		// ---------SMS---------
		// AUTHORIZATION DETAILS
		// DATA FOR TEXT MESSAGE
		$from = "09498659181";

		// CONFIGURATION VARIABLES
		$info = "1";
		$test = "1";

		// PREPARE DATA FOR POST REQUEST WITH cURL
		$data = "uname=".$uname."&pword=".$pword."&message=".$message."&from=".$from."&selectednums=".$selectednums."&info=".$info."&test=".$test;

		$ch = curl_init('http://www.txtlocal.com/sendsmspost.php');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch); // THIS IS THE RESULT FROM TEXTLOCAL
		curl_close($ch);
		// ---------SMS---------
		
		echo $result;
	}
?>