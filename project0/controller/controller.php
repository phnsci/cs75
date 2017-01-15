<?php
// there are four pages to serve
// 1. menu page 
// 2. customize page
// 3. submit page: printing prices and number
// 4. shopping cart page

// at the beginning, the page to serve is 1, which is
// the menu
$page_to_serve = 1;

// create a array that stores all the information
// that we want to query from the database: menu.xml
// NOTE: in this program, no data needed to queried by
// data
$data = array();

if (isset($_POST))
{
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
}

// the data will be filled in the model
include(M . 'model.php');

$data['page'] = 1;

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

// if user click any submit button
if (isset($_POST['button']))
{
	$submitbutton = $_POST['button'];

	// change page to serve based on submit button
	if ($submitbutton == 'Go Back')
	{
		$page_to_serve = 1;
	}
	elseif($submitbutton == 'Customize')
	{
		$page_to_serve = 2;
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

$data['page'] = $page_to_serve;

// render menu table in browser
include (V . 'view.php');
?>
