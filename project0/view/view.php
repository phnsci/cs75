<?php

// meta data
echo 
"
<!DOCTYPE HTML>
<html lang='en'>
	<head>
";

// render page header
include (realpath(dirname(__FILE__).'/header.php'));

echo 
"
	</head>
	<body>
";

// render top bar
include ('topbar.php');

if ($_SESSION['page'] == '1')
{
	// render menu
	include (realpath(dirname(__FILE__)
				.'/page-1-container.php'));
}
elseif ($_SESSION['page'] == '2')
{
	// render customize page 
	include (realpath(dirname(__FILE__)
				.'/page-2-container.php'));
}
elseif ($_SESSION['page'] == '3')
{
	// render confirmation page after customize
	include (realpath(dirname(__FILE__)
				.'/page-3-container.php'));
}
else if ($_SESSION['page'] == '4')
{
	// render submission page
	include (realpath(dirname(__FILE__)
				.'/page-4-container.php'));
}

echo
"
	</body>
</html>
";
