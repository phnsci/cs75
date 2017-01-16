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
$foods_xml = $option->xpath('.//food');

// print each food elements in each options as a list
foreach($foods_xml as $food)
{
	// print "name" attributes of food elements
	echo
	"
	<div id='atom'>
	<input type='checkbox' id='{$food[@name]}'
	value='{$food[@name]}' name='food[]'/>
	<label for='{$food[@name]}'>
		{$food[@name]}
	</label>
	</div>
	";
}

// close div
echo "</div>";

?>
