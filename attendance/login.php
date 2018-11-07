<?php
session_start();

include 'db.php';

if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$password = $_POST['pass'];

		$q = "SELECT * FROM students WHERE email = '$email' && password = '$password'";
		$result = mysqli_query($con, $q);

		$num = mysqli_num_rows($result);

		if($num == 1)
		{
			header('location: index1.php');
		}
		else
		{
				header('location: login.php');
		}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Class ASSESMENT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background: url('2.jpeg') no-repeat; width:100%; height:600px;">
    <div class="one">
        <h1>Student Login</h1>
    </div>
    <div class="two">

        <form method="POST" action="">
            <input type="email" name="email" placeholder="Email" /><br>
            <input type="password" name="pass" placeholder="Password" /><br>
            <input type="submit" value="LOG IN" name="submit" />
        </form>
        <h4>If Not Registered<a href="register.php">Click Here</a></h4>
    </div>
</body>
</html>
