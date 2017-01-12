<?php
		$array_xml = $data['menu'];
		
		// get all menu dinner types
		// select all option elements that are element
		// of menu element
		$option_xml = $array_xml[0]->xpath('.//option');


		// render each options into separate div 
		foreach($option_xml as $option)
		{
			include('render-menu.php');	
		}
?>
