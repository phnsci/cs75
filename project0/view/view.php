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


if ($data['page'] == '1')
{
	// render menu
	include ('render-menu.php');
}
elseif ($data['page'] == '2')
{
	// render customize page 
	include ('render-customize.php');
}
elseif ($data['page'] == '3')
{
	// render confirmation page after customize
	include ('render-confirm.php');
}
else if ($data['page'] == '4')
{
	// render submission page
	include('render-submit.php');
}

echo
"
	</body>
</html>
";
