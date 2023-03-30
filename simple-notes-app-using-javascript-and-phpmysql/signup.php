<?php 

session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(!empty($firstname) && !empty($lastname) && !empty($gender) && !empty($password) && !is_numeric($firstname))
	{
		//save to database
		$user_id = random_num(20);
		$query = "insert into notes (user_id,firstname,lastname,gender,email,password) values ('$user_id','$firstname','$lastname','$gender','$email','$password')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die; 

	}else
	{
		echo "Please enter some valid information!";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
</head>
<body>
	<style type="text/css">

		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa ;
			width: 100%;
		}
		#button{
			padding: 10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;

		}

		#box{
			background-color: grey;
			margin: auto;
			width: 300px;
			padding: 20px;
		}
	</style>

	<div id="box">
		<form method="post">
			<div style="font-size:20px ;margin: 10px;color: white;">Signup</div>
			<input id="text" type="text" name="firstname" placeholder="Enter firstname" required><br><br>
			<input id="text" type="text" name="lastname" placeholder="Enter lastname" required><br><br>
			<span style="font-weight:bold; text-align: center;">Gender</span><br>
			 <select id="text" name="gender"><br><br>

      		 <option>  </option>
      		 <option>Male</option>
      		 <option>Female</option>

    		 </select><br><br>

			<input id="text" type="text" name="email" placeholder="Enter email" required><br><br>
			<input id="text" type="password" name="password" placeholder="Enter password" required><br><br>
			<input id="text" type="password" name="password" placeholder="Retype password" required><br><br>
				<input id="button" type="submit" value="Signup"><br><br>

				<a href="login.php">Click to Login</a><br><br>
		</form>

	</div>
</body>
</html>