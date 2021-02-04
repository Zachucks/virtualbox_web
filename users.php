<?php
	//Start the session
	session_start();

	//Function declaration for checking if a user is logged in
	function check_logged_in() {
		//Check if the user_id session variable is set
		if (empty($_SESSION['user_id'])) {
			//Return 1 to say that the user is not logged in
			return 1;
		}
		else {
			//Return 0 to say that the user is logged in
			return 0;
		}
	}

	//Function declaration for checking if a user has specified permissions
	function check_permissions($lvl) {
		//Check if user permission lvl is above or at the specified permission level
		if ($_SESSION['account_level'] >= $lvl) {
			//Return 0 to say that they have permissions
			return 0;
		}
		else {
			//Return 1 to say that they do not have permissions
			return 1;
		}
	}

	//Check if logout has been requested
	if (!empty($_GET['logout'])) {
		//Clear session variables
		unset($_SESSION['user_id']);
		unset($_SESSION['name']);
		unset($_SESSION['email']);
		unset($_SESSION['username']);
		unset($_SESSION['account_level']);
		//Redirect to login
		header("Location: login.php");
		exit();
	}
	//Check if login form is filled out
	if (!empty($_POST['login_username']) && !empty($_POST['login_password'])) {
		//Include the database connection
		include_once 'dbc.php';
		//Sanitize the inputs
		$username = mysqli_real_escape_string($conn, $_POST['login_username']);
		$password = mysqli_real_escape_string($conn, $_POST['login_password']);
		//Check if user exists
		//Prepare SQL query
		$sql = "SELECT * FROM users WHERE username='${username}'";
		//Store the query in a results variable
		$results = mysqli_query($conn, $sql);
		//Grab number of returned rows from result set
		$numRows = mysqli_num_rows($results);
		//Check if returned rows is not 0
		if ($numRows != 0) {
			//User found, check that the password entered is correct
			$user = mysqli_fetch_assoc($results);
			if (password_verify($password, $user['password'])) {
				//Store user details in session
				$_SESSION['user_id'] = $user['user_id'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['username'] = $user['username'];
				$_SESSION['account_level'] = $user['account_level'];
				//Echo out success message
				echo "<span class='text-success'>Success: You have been logged in! Redirecting...<p><span>";
				//Echo out script to redirect to index
				echo "<script>window.location = 'index.php';</script>";
				exit();
			}
			else {
				//Password is wrong, return error
				echo "<span class='text-danger'>Error: The password you entered is incorrect!<p></span>";
				exit();
			}
		}
		else {
			//0 users found with that username, return error
			echo "<span class='text-danger'>Error: That username is invalid!<p></span>";
			exit();
		}
	}
?>
