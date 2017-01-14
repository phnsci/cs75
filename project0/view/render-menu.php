<?php
	// get all menu dinner types
	// select all "option" elements that are c
	// child element of "menu" element
	$option_xml = $array_xml->xpath('.//option');

	/*
	foreach($option_xml as $opt)
	{
		echo $opt[@type] . '<br>';
	}
	*/

	//echo $option_xml[0][2][@name];

	// create a form 
	echo
	"
	<form 
	action='entry.php'
	method = 'post'>
	";

	// render each options into separate div 
	foreach($option_xml as $option)
	{
		include(realpath(dirname(__FILE__) .
					'/render-food.php'));	
	}

	// "Customize" button
	echo " 
	<input type='submit' name='button' 
	value='Customize'>
	";
	echo "</form>";
?>
