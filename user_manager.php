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
	//Check that user has permissions to view page
	if (check_permissions(100) == 1) {
		//User does not have permissions, redirect to index
		header("Location: index.php");
		exit();
	}

	//Header
	//Set current file to account_manager
	$currFile = "account_manager";
	include_once 'header.php';
	//Nav bar
	include_once 'nav.php';

	//Modal
	echo "<div class='modal' id='modal'>";
	echo "<div class='modal-dialog' role='document'>";
	echo "<div class='modal-content'>";
	echo "<div class='modal-header'>";
	echo "<h5 class='modal-title'>Modal title</h5>";
	echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close' onClick='showHideModal(\"newAccount\",0)'>";
	echo "<span aria-hidden='true'>&times;</span>";
	echo "</button>";
	echo "</div>";
	echo "<div class='modal-body' id='modal_content'>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";

	//Echo out main container div
	echo "<div class='main_content'>";
	//And a heading for the page
	echo "<h1 class='text-primary'>Account Management</h1>";
	//Echo out a new account button
	echo "<a class='fas fa-user-plus icon_add' onClick='showHideModal(\"create_account\",1)'> Create Account</a><p><p>";
	//Include the database connection
	include_once 'dbc.php';
	//Query the database for a list of users
	//Prepare SQL query
	$sql = "SELECT * FROM users ORDER BY username,name";
	//Store the results of the query in a results variable
	$results = mysqli_query($conn, $sql);
	//Check the number of results
	$numRows = mysqli_num_rows($results);
	//Check if number of returned results is not 0
	if ($numRows != 0) {
		//Loop through users and print them out in a table format
		//Echo out the start of the table
		echo "<table class='table table-hover'>";
		//Echo out the table header
		echo "<thead><th>User ID</th><th>Username</th><th>Name</th><th>Email</th><th>Account Level</th><th>Modify</th><th>Remove</th></thead>";
		//Initialize a count variable to keep track of the current row
		$cnt = 0;
		//Loop through result set and print a row for every user
		while ($user = mysqli_fetch_assoc($results)) {
			//Initialize a row style variable with a default style
			$rowStyle = "class='table-primary'";
			//Check if the count is 0
			if ($cnt == 0) {
				//Set the row style to primary
				$rowStyle = "class='table-primary'";
				//Set the counter to 1
				$cnt = 1;
			}
			else {
				//Set the row style to secondary
				$rowStyle = "class='table-secondary'";
				//Set the counter to 0
				$cnt = 0;
			}
			//Grab the user's data in local variables
			$user_id = $user['user_id'];
			$username = $user['username'];
			$name = $user['name'];
			$email = $user['email'];
			$account_level = $user['account_level'];
			//Create the buttons for modify and remove
			$modifyBtn = "<a class='fas fa-user-edit icon_edit' onClick='showHideModal(\"modify_account\",1,${user_id})'> Modify</a>";
			$removeBtn = "<a class='fas fa-user-times icon_remove' onClick='showHideModal(\"remove_account\",1,${user_id})'> Remove</a>";
			//Echo out the row
			echo "<tr ${rowStyle}><td>${user_id}</td><td>${username}</td><td>${name}</td><td>${email}</td><td>${account_level}</td><td class='content_center'>${modifyBtn}</td><td class='content_center'>${removeBtn}</td></tr>";
		}
		//Echo out the end of the table
		echo "</table>";
	}
	else {
		//Zero users, print message
		echo "<span class='text-danger'>We didn't find any users, try creating one!</span>";
	}
	//Finish off the main container div
	echo "</div>";

	//Footer
	include_once 'footer.php';
?>
