# VirtualBox Web v1.210204
 A virtualbox web interface for a linux server

# Requirements
 <ul>
 	<li>Python 3</li>
 	<li>Ubuntu Desktop/Server 20.04</li>
 	<li>VirtualBox 6.1</li>
 	<li>Nmap for Linux (Apt)</li>
 	<li>LAMP Stack (you can use <a href="https://github.com/Zachucks/linux_setup">this</a> script to install the LAMP stack, I built this application using it, and I built the script too [:)] )</li>
 </ul>

# Setup
 Run the `sql_setup.php` file via command line:<br>
 `php sql_setup.php`
 
 You will be required to create a `dbc.php` file with the following contents:
 ```
	<?php
		//Create database connection
		//Replace username and password with yours
		$conn = mysqli_connect("127.0.0.1", "username", "password", "vms");
	?>
 ```

# Planned
 <ul>
 	<li>Multi-user interface</li>
 	<li>VMs assigned to users</li>
 	<li>Service detection against vms with nmap</li>
 	<li>Ability to manage vms (shutdown, start, create, modify, remove)</li>
 </ul>

# Credits
 <ul>
 	<li>JQuery from <a href="https://jquery.com/" target="_blank">JQuery.com</a></li>
 	<li>Bootstrap JS (`bootstrap.bundle.js` & `bootstrap.bundle.js.map`) from <a href="https://getbootstrap.com/docs/4.1/getting-started/download/" target="_blank">getbootstrap.com</a></li>
 	<li>Bootstrap CSS (`bootstrap.css` litera template) from <a href="https://bootswatch.com/" target="_blank">Bootswatch.com</a></li>
 </ul>
