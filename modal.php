<?php
	//Start the session
	session_start();

	//Include the users file
	include_once 'users.php';

	//Check if user is logged in
	if (check_logged_in() == 0) {
		//Check to ensure a form has been requested
		if (!empty($_GET['formType'])) {
			//Check which modal form has been requested
			if ($_GET['formType'] == "create_account") {
				//Provide the create account form
				//Check if user is admin
				if (check_permissions(100) == 0) {
					//Echo out the user creation form
					echo "Create Account";
				}
				else {
					//User doesn't have permissions
					echo "<span class='text-danger'>You do not have permissions to view this form.</span>";
				}
				exit();
			}
			else if ($_GET['formType'] == "modify_account" && !empty($_GET['userID'])) {
				//Provide the modify account form
				//Check if user is admin
				if (check_permissions(100) == 0) {
					//Echo out the user creation form
					$userID = $_GET['userID'];
					echo "Modify Account ${userID}";
				}
				else {
					//User doesn't have permissions
					echo "<span class='text-danger'>You do not have permissions to view this form.</span>";
				}
				exit();
			}
			else if ($_GET['formType'] == "remove_account" && !empty($_GET['userID'])) {
				//Provide the remove account form
				//Check if user is admin
				if (check_permissions(100) == 0) {
					//Echo out the user creation form
					$userID = $_GET['userID'];
					echo "Remove Account ${userID}";
				}
				else {
					//User doesn't have permissions
					echo "<span class='text-danger'>You do not have permissions to view this form.</span>";
				}
				exit();
			}
		}
	}
?>
