<?php
	$css_files = [
		"bootstrap.css",
		"styles.css"
	];
	for ($css_files as $cssf) { $v = rand(11111,99999);echo "<script type='text/javascript' src='${cssf}?v=${v}'></script>"; }
?>
