<?php
		$array_xml = $data['menu'];
		

		/*
		echo "<pre>";
		print_r($array_xml);
		echo "</pre>";
		*/

		// get all menu dinner types
		$option_xml = $array_xml[0]->xpath('.//option');


		foreach($option_xml as $option)
		{
			//print $option["type"];

			include('render-menu.php');	
		}
?>
