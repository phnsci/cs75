<?php

if ($warning == true)
{
	echo "
	<p style='color:red; font-size:20px; 
	text-align: center;'>
	<b>
	***You need to choose at least one option***
	</b>
	</p>
	";
}

$warning = false;
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
				'/menu-food.php'));	
}

// [Customize] submit button
echo " 
<input type='submit' name='button' 
value='Customize'>
";
echo "</form>";

?>
