<?php
	//Specify an array of css file names
	$css_files = [
		"bootstrap.css",
		"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css",
		"styles.css"
	];
	//Loop through the array, printing out a link and random version for each file
	foreach ($css_files as $cssf) { $v = rand(11111,99999);echo "<link rel='stylesheet' type='text/css' href='${cssf}?v=${v}'>"; }
?>
