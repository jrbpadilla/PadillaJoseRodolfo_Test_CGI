<?php session_start();


	$username = "";
	$email = "";
	$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cgi');

// log user from login page
if(isset($_POST['login']))
{
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

// ensure that forms fields are filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
		if (empty($password)) {
		array_push($errors, "Password is required");
	}
	if (count($errors) == 0) {
		$password = md5($password);
		$sql = "SELECT * FROM login WHERE username='$username' AND password ='$password'";
		$result= mysqli_query($db, $sql);
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Welcome!";
			header('location: homepage.php');
		}	
		
		else{
			array_push($errors, "The Username/Password do not match. Please try again.");
		}
	}
}

if (isset($_POST['register'])) 
{
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$description = mysqli_real_escape_string($db, $_POST['description']);
	$rt_date = mysqli_real_escape_string($db, $_POST['rt_date']);
	$c_date = mysqli_real_escape_string($db, $_POST['c_date']);

// ensure that forms fields are filled properly
	if (empty($name)) {
		array_push($errors, "Name is required");
	}
	if (empty($description)) {
		array_push($errors, "Description is required");
	}
	if (empty($rt_date)) {
		array_push($errors, "Reason Target Date is required");
	}
		if (empty($c_date)) {
		array_push($errors, "Completed Date is required");
	}



	if (count($errors) == 0) {
		$sql = "INSERT INTO objective (name, description, rt_date, c_date) VALUES ('$name','$description','$rt_date', '$c_date')";

		mysqli_query($db, $sql);
		$_SESSION['objective'] = $objective;
		$_SESSION['success'] = "You are now logged in.";
		header('location: objectives.php');
	}
}

//logout
if (isset($_GET['logout'])){
	session_destroy();
	header("Location: login.php");
}