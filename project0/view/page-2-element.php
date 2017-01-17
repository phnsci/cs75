<?php
	
echo
"
<div id ='option'>
";

// print user ordered option
echo "	
<h1>{$order['name']}</h1>
";

echo "	
<div id='atom'>
Numbers  <input type='text' size='3'
		  autocomplete='off' maxlength='3'
		  name=\"orders['$order[\'name\']']['num']\"/>
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
	Size
	<select name=\"orders['$order']['size']\">
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
	Cheese Size
	<select name=\"orders['$order']['cheese']\">
		<option value='none'>None</option>
		<option value='large'>Large</option>
		<option value='Small'>Small</option>
	</select>
	</div>
	";
}

echo "</div>";
?>
