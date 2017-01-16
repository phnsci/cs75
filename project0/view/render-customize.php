<?php

echo 
"
<form
action = 'entry.php'
method = 'post'>
";

$index = 0;

// if user go from "menu page" to "cutmization page"
if (isset($_POST['food']))
{
	// copy inputs from $_POST to $_SESSION['temp']
	foreach($_POST['food'] as $order)
	{
		$_SESSION['temp'][$index++] = $order;
	}

	// clear any possible data in $_SESSION['temp']
	while (isset($_SESSION['temp'][$index]))
	{
		unset($_SESSION['temp'][$index++]);
	}
}

foreach($_SESSION['temp'] as $order)
{
	include (realpath(dirname(__FILE__)
				.'/customize-order.php'));
}

// [Go Back] button
echo "
<input type='submit' name='button'
value='Go Back'>
";

// [Confirm] button
echo "
<input type='submit' name='button'
value='Submit'>
";

// close form
echo "</form>";

?>
