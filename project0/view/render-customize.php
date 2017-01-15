<?php
	echo 
	"
	<form
	action = 'entry.php'
	method = 'post'>
	";

	$index = 0;
		
	foreach($_POST['food'] as $order)
	{
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
?>
