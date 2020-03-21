<?php include("reload.php"); ?>

<!doctype html>
<html lang="en">
	
<head>
	<title>CMPT 470 A3</title>
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
	<meta charset="utf-8" />
	<meta name="keywords" content="math, Euler, pi, geometry" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

<div id="input_form" class="container">
	<form id="form1" action="action.php" method="POST">
		<h3>Registration Info</h3>
		<input <?php echo ($flag)?"value='{$name_}'":""; ?> id="name" type="text" name="userName" placeholder="Your Name" required><br>
		<input <?php echo ($flag)?"value='{$email_}'":""; ?> id="email" type="email" name="userEmail"placeholder="Your Email" required><br>
		<input <?php echo ($flag)?"value='{$age_}'":""; ?> id="age" type="number" min="1" name="userAge"placeholder="Your Age" required><br>
		<input <?php echo ($flag)?"value='{$gpa_}'":""; ?> id="gpa" type="number" step="0.01" min="0" max="4.33" name="userGpa"placeholder="Your GPA" required><br>
		<?php 
			if($flag==true){
				echo '<input type="hidden" name="callerType" value="edit">';
				echo "<input type=\"hidden\" name=\"id\" value=\"{$id_}\">";
				echo '<input style="background-color:blue;" type="submit" value="update">';
			}else{
				echo '<input type="hidden" name="callerType" value="add">';
				echo '<input type="submit" value="enter">';
			}
		?>
	</form>
</div>

<br/>

<div id="users_list" class="container">
	<div class="div1">
		<p>Users: </p>
		<table class="col-9 table table-striped shadow bg-white rounded">
		<thead>
			<th>
				ID
			</th>
			<th>
				NAME
			</th>
			<th>
				EMAIL
			</th>
			<th>
				AGE
			</th>
			<th>
				GPA
			</th>
			<th>
				GPA/4.33 (percentage, %)
			</th>
			<th colspan="2">
				Action
			</th>
		</thead>
		<tbody>
			<?php include("retrieve.php"); ?>
			</tbody>
		</table>
	</div>
</div>
	
</body>
</html> 
