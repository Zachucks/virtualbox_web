<?php
	//Start the session
	session_start();

	//Include users.php for login and permission checking
	include_once 'users.php';
	//Check if user is logged in
	if (check_logged_in() == 1) {
		//User is not logged in, redirect
		header("Location: login.php");
		exit();
	}

	//Header
	include_once 'header.php';
	//Nav bar
	include_once 'nav.php';

	//Footer
	include_once 'footer.php';
?>
