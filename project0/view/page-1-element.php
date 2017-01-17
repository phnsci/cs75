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
<h1>$food[0]</h1>
";

$num_food = count($food);

// print each food elements in each options as a list
for($i = 1; $i < $num_food; $i++)
{
	// print "name" of each food
	echo
	"
	<div id='atom'>
	<input type='checkbox' id='{$food[$i]}'
	value='{$food[$i]}' name='food[]'/>
	<label for='{$food[$i]}'>
		{$food[$i]}
	</label>
	</div>
	";
}

// close div
echo "</div>";

?>
