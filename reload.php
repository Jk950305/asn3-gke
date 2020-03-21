<?php
	include("connection.php");
	$flag = false;
	if (isset($_GET['callerType'])) {
		if($_GET['callerType'] == 'edit'){
			$flag = true;
			$id_ = $_GET['id'];
			$update = true;
			$sql = "select
						u.id as id
						, u.name as name
						, u.email as email
						, u.age as age
						, u.gpa as gpa 
					from 
						users as u 
					where
						id = {$id_}
					";
			$stmt = $conn->prepare($sql); 
			$stmt->execute(); 
			$n = $stmt->fetch();
			$name_ = $n['name'];
			$email_ = $n['email'];
			$age_ = $n['age'];
			$gpa_ = $n['gpa'];
		}
	}
?>