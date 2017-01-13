<?php

// there are four pages to serve
// 1. menu page 
// 2. customize page
// 3. submit page: printing prices and number
// 4. shopping cart page

// at the beginning, the page to serve is 1
$page_to_serve = 1;

// create a array that stores all the information of menu
$data = array('menu' => '/menu');

// the data will be filled in the model
include(M . 'model.php');

// if user click any submit button
if (isset($_POST['button']))
{
	$submitbutton = $_POST['button'];

	// change page to serve based on submit button
	if ($submitbutton == 'Go Back')
	{
		$page_to_serve--;
	}
	elseif($submitbutton == 'Customize')
	{
		$page_to_serve = 2;
	}
	elseif ($submitbutton == 'Confirmation')
	{
		$page_to_serve = 3;
	}
	elseif ($submitbutton == 'Main Page')
	{
		$page_to_serve = 1;
	}
}

// add page to serve to data array
$data['page'] = $page_to_serve;

/*
echo "<pre>";
print_r($data);
print_r($submitbutton);
echo "</pre>";
*/

// render menu table in browser
include (V . 'view.php');

?>
