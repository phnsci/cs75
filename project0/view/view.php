<?php

// meta data
echo 
"
<!DOCTYPE HTML>
<html lang='en'>
	<head>
";

// render page header
include ('header.php');

echo 
"
	</head>
	<body>
";

// render  top bar
include ('topbar.php');

// render page content
include ('content.php');

echo
"
	</body>
</html>
";
