<?php
	include("connection.php"); 
	$sql = "";
	if(isset($_POST["callerType"])){
		if( $_POST["callerType"] == 'add' ){
			$name = $_POST["userName"];
			$email = $_POST["userEmail"];
			$age = $_POST["userAge"];
			$gpa = $_POST["userGpa"];

			$sql = "insert into users(name, email, age, gpa)
						values('{$name}','{$email}','{$age}','{$gpa}');";

		}elseif( $_POST["callerType"] == 'edit' ){
			$id = $_POST["id"];
			$name = $_POST["userName"];
			$email = $_POST["userEmail"];
			$age = $_POST["userAge"];
			$gpa = $_POST["userGpa"];

			$sql = "update users set name='{$name}',email='{$email}',age={$age},gpa={$gpa} where id={$id};";
		}

	}elseif( isset($_GET["callerType"]) ){
		if( $_GET["callerType"] == 'delete' ){
			$id = $_GET["id"];
			$sql = "delete from users where id = {$id};";
		}
	}

	if($sql != ""){
		try{
			$conn->exec($sql);
		}
		catch( \Exception $e){
			echo $e->getMessage();
		}
	}
	
	//redirect to previous page.
	header("Location: index.php");
	exit();


?>