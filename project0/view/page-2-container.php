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
		$_SESSION['temp'][$index++]['name'] = $order;
	}

	$order_limit = $index;

	// clear any possible data in $_SESSION['temp']
	while (isset($_SESSION['temp'][$index]))
	{
		unset($_SESSION['temp'][$index++]);
	}
}

echo $order_limit;

// retrieve user order from $_SESSION
for($index = 0; $index < $order_limit; $index++)
{
	echo "<pre>";
	print_r($_SESSION['temp'][$index]);
	echo "</pre>";

	$order = $_SESSION['temp'][$index];

	include (realpath(dirname(__FILE__)
				.'/customize-order.php'));
	$index++;
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
