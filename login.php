<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h2>Login Form</h2>
	<form method="post" action="login.php">
		<label>Email:</label>
		<input type="email" name="email" required><br><br>
		
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		
		<input type="submit" name="submit" value="Login">
	</form>



    <?php



if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email === "asdf@gmail.com" && $password === "123"){
        $valid_credentials = true;
        $first_name = "Ahsan Habib";
    }
    else{
        $valid_credentials = false;
    }

    if($valid_credentials){
        echo "<p>Welcome, $first_name!</p>";
        
    }
    else{
        echo "<p>Invalid email or password. Please try again.</p>";
    }
}





?>



</body>
</html>

