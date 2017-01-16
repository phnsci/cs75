<?php
// start the session
session_start();

// there are four pages to serve
// 1. menu page 
// 2. customize page
// 3. submit page: printing prices and number
// 4. shopping cart page

// at the beginning, the page to serve is 1, which is
// the menu
if (isset($_SESSION['page']))
	$page_to_serve = $_SESSION['page'];
else
	$page_to_serve = 1;

// create a array that stores all the information
// that we want to query from the database: menu.xml
// NOTE: in this program, no data needed to queried by
// data
$data = array();

// the data will be filled in the model
include(M . 'model.php');

// get all <option> tag elements
$option_xml = $menu_xml->option;

// get all <price> tag elements
$price_xml = $menu_xml->xpath('.//price');

// create an unique index and assign for each <price>
$index = 0;

/* THE FOR LOOP WILL GIVE EACH <price> TAG AN ID */
// going into individual <option>
for ($i = 0; $i < count($option_xml); $i++)
{
	// get number of <food> element in this <option>
	$count_food  = count($option_xml[$i]->food); 

	// going into individual <food> in this <option>
	for ($j = 0; $j < $count_food; $j++)
	{
		// if <price> is the direct child element 
		// of <food>
		if (isset($option_xml[$i]->food[$j]->price))
		{
			// assign index directly to price
			$option_xml[$i]->food[$j]->price
				['id'] = $index++;
		}
		// assign id to price of <large> and <small>
		else
		{
			$option_xml[$i]->food[$j]->large->price
				['id'] = $index++;
			$option_xml[$i]->food[$j]->small->price
				['id'] = $index++;
		}
	}
}

// function to save menu_xml to a file named menu.xml
$menu_xml->asXML(M.'menu.xml');

// warning flag when user doesn't chooose any option
// in "menu page"
$warning = false;

// if user click any submit button
if (isset($_POST['button']))
{
	$submitbutton = $_POST['button'];

	// change page to serve based on submit button
	if ($submitbutton == 'Go Back' && 
			$page_to_serve > 1)
	{
		$page_to_serve--;
	}
	elseif($submitbutton == 'Customize')
	{
		// turn on wanring if user forget to choose
		if (empty($_POST['food']))
		{
			$warning = true;
			$page_to_serve = 1;
		}
		// else continue to customize page
		else
		{
			$page_to_serve = 2;
		}
	}
	elseif ($submitbutton == 'Submit')
	{
		$page_to_serve = 3;
	}
	elseif ($submitbutton == 'Main Page' ||
			$submitbutton == 'Confirm')
	{
		$page_to_serve = 1;
	}
}

$_SESSION['page'] = $page_to_serve;

// process user order -> confirmation page
if (isset($_POST['orders']))
{
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	/*
	foreach($_POST['orders'] as $name => $arr)
	{
		// find order data in xml file
		$order_xml = $menu_xml->
			xpath(".//food[@name=$name]");
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
	*/
}

// render menu table in browser
include (V . 'view.php');
?>
