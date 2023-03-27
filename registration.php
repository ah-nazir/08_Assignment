<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h2>Registration Form</h2>
	<form method="post" action="registration.php">
		<label>First Name:</label>
		<input type="text" name="first_name" required><br><br>
		
		<label>Last Name:</label>
		<input type="text" name="last_name" required><br><br>
		
		<label>Email:</label>
		<input type="email" name="email" required><br><br>
		
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		
		<label>Confirm Password:</label>
		<input type="password" name="confirm_password" required><br><br>
		
    
		<input type="submit" name="submit" value="Register">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		
		if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)){
			echo "<p>All fields are required!</p>";
		}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "<p>Invalid email format!</p>";
		}
		elseif($password != $confirm_password){
			echo "<p>Passwords do not match!</p>";
		}
		else{
			echo "<p>Registration successful!</p>";
			
		}
	}
	?>
</body>
</html>
