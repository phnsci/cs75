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
				.'/render-menu.php'));
}
elseif ($_SESSION['page'] == '2')
{
	// render customize page 
	include (realpath(dirname(__FILE__)
				.'/render-customize.php'));
}
elseif ($_SESSION['page'] == '3')
{
	// render confirmation page after customize
	include (realpath(dirname(__FILE__)
				.'/render-confirm.php'));
}
else if ($_SESSION['page'] == '4')
{
	// render submission page
	include (realpath(dirname(__FILE__)
				.'/render-submit.php'));
}

echo
"
	</body>
</html>
";
