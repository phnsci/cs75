<?php
	
/*
echo "<pre>";
print_r($_POST['orders']);
echo "</pre>";
*/

echo 
"
<form 
action = 'entry.php'
method = 'post'>
";

foreach($_POST['orders'] as $order)
{
	include(realpath(dirname(__FILE__) 
				.'/confirm-order.php'));
}

// [Go Back] button
echo "
<input type='submit' name='button'
value='Go Back'>
";

// [Confirm] button
echo "
<input type='submit' name='button'
value='Confirm'>
";

echo "</form>";

?>
