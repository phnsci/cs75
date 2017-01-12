<?php

// open menu 
// each option div contains one type of pizza
echo 
"
		<div id='option'>
";

// print type attribute of each options
echo
"
			<h1>{$option[@type]}</h1>
";

// select all attributes that are designated "name"
$foods_xml = $option->xpath('.//@name');

// print each food elements in each options as a list
foreach($foods_xml as $food)
{
	// print "name" attributes of food elements
	echo
	"
				<div id='food'>{$food[@name]}</div>
	";
}

// close div
echo 
"
		</div>
";
?>
