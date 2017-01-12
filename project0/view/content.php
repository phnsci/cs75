<?php
		$array_xml = $data['menu'];
		
		// get all menu dinner types
		// select all "option" elements that are c
		// child element of "menu" element
		$option_xml = $array_xml[0]->xpath('.//option');

		$customize_form = C.'customize.php';

		// create a form 
		echo
		"
		<form 
		action='$customize_form'
		method = 'post'>
		";

		// render each options into separate div 
		foreach($option_xml as $option)
		{
			include('render-menu.php');	
		}

		// make a submit button
		echo 
		"
		<input type='submit' value='Customize'>
		</form>
		";
?>
