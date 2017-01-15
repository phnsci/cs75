<?php
	
echo
"
<div id ='option'>
";

// print user ordered option
echo "	
<h1>$order</h1>
";

echo "	
<div id='atom'>
Numbers  <input type='text' name='num' size='3'
		  autocomplete='off' maxlength='3'/>
</div>
";

// search for order in xml file
$order_xml = $menu_xml->xpath(".//food[@name = 
		'$order']");

// if the order has size
// make an option large or small
if (isset($order_xml[0]->large))
{
	echo "
	<div id='atom'>
	Choose Size
	<select>
		<option value='large'>Large</option>
		<option value='small'>Small</option>
	</select>
	</div>
	";
}

// if the order has extra cheese
// make an option to choose
if (isset($order_xml[0]->xpath('..')[0]->extra))
{
	echo "
	<div id='atom'>
	Choose extra cheese
	<select>
		<option value='none'>None</option>
		<option value='large'>Large</option>
		<option value='Small'>Small</option>
	</select>
	</div>
	";
}

echo "</div>";
?>
