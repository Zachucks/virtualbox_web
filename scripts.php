<?php
	//Specify an array of javascript file names
	$js_files = [
		"jquery.js",
		"bootstrap.bundle.js",
		"scripts.js"
	];
	//Loop through the array, printing out a link and random version for each file
	foreach ($js_files as $jsf) { $v = rand(11111,99999);echo "<script type='text/javascript' src='${jsf}?v=${v}'></script>"; }
?>
