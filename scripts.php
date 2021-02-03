<?php
	$js_files = [
		"jquery.js",
		"bootstrap.bundle.js",
		"scripts.js"
	];
	foreach ($js_files as $jsf) { $v = rand(11111,99999);echo "<script type='text/javascript' src='${jsf}?v=${v}'></script>"; }
?>
