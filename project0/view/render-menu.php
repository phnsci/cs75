<?php

// open menu type
echo 
"
<div id='option'>
";

// print option in big header
echo
"
	<h>{$option[@type]}</h>
";

// select all foods inside each option
$foods_xml = $option->xpath('.//food[@name]');

// open list
echo 
"
<li>
";

// print each food in the option
foreach($foods_xml as $food)
{
	echo
	"
	<ul>{$food[@name]}</ul>
	";
}

// close list
echo
"
</li>
";


// close div
echo 
"
</div>
";
?>
