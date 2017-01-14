<?php
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
