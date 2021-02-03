<?php
	$css_files = [
		"bootstrap.css",
		"styles.css"
	];
	foreach ($css_files as $cssf) { $v = rand(11111,99999);echo "<link rel='stylesheet' type='text/css' href='${cssf}?v=${v}'>"; }
?>
