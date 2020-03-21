<?php
	//connect to database
//	$servername = "35.202.227.4";
//	$dbname = "asn3_db";
//	$username = "root";
//	$password = "sqlserver";


	$servername = "35.225.13.196";
	$dbname = "asn3";
	$username = "test_remote";
	$password = "test_remote";
	
	//create connection	
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		//set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully";
	}
	catch(PDPException $e) {
		//echo "Connection failed: ".$e->getMessage();
	}
	catch( \Exception $e){
		//echo "Unknown exception".$e->getMessage();
	}	
?>