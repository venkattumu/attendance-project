<?php
session_start();

include 'db.php';
if(isset($_POST['submit']))
{

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['pass'];

		$sql = "SELECT * FROM students WHERE email = '$email' && password = '$password'  ";

		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result) == 1)
		{
			echo "Email already exists";
		}
		else
		{
			$query = "INSERT INTO students (username, email, password) VALUES ('$name', '$email', '$password')";

			if(mysqli_query($con,$query))
			{
				$_SESSION['id'] = mysqli_insert_id($con);
				// $_SESSION['email']	= $email;
				// echo "inserted".$_SESSION['id'];
				header("refresh:1; url=login.php");
			}
			else
			{
				echo "not inserted";
			}

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
<body style="background: url('3.jpeg') no-repeat; width:100%; height:570px;">
    <div class="one">
        <h1>Student Registration</h1>
    </div>
    <div class="two">

        <form method="POST" action="">
            <input type="text" name="name" placeholder="Username" /><br>
            <input type="email" name="email" placeholder="Email" /><br>
            <input type="password" name="pass" placeholder="Password" /><br>
            <input type="submit" value="Register" name="submit" />
        </form>
				<h4>Already a user go to<a href="login.php">Login</a></h4>
    </div>
</body>
</html>
