<?php
	try{
		$sql = "select
					u.id as id
					, u.name as name
					, u.email as email
					, u.age as age
					, u.gpa as gpa 
				from 
					users as u 
				";

		$result = $conn->query($sql);

		while($row = $result->fetch()){
			//store sql results
			$id = $row["id"];
			$name = $row["name"];
			$email = $row["email"];
			$age = $row["age"];
			$gpa = $row["gpa"];
			$percent = ceil($gpa/4.33*100);
			
			echo "<tr>";
			echo "<td>".$id."</td>";
			echo "<td>".$name."</td>";
			echo "<td>".$email."</td>";
			echo "<td>".$age."</td>";
			echo "<td>".$gpa."</td>";
			echo "<td class=\"bin\"><div class=\"skills\" style=\"width:".$percent."%; \">{$percent}% . </div></td>";
			echo "<td><a class='edit_btn' href=\"index.php?callerType=edit&id={$row['id']} \">Edit</a></td>";
			echo "<td><a class='delete_btn' href=\"action.php?callerType=delete&id={$row['id']}\">Delete</a></td>";

			echo "</tr>"; 
		}				
	}
	catch( \Exception $e){
		echo $e->getMessage();
	}	

	$conn = null; //disconnect
?>