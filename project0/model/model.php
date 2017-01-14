<?php

// load xml file root element
$menu_xml = simplexml_load_file(M . 'menu.xml');

// xml now is a SimpleXMLElement object and has xpath
// function that render xpath queries on it

// get multiple queries from the controller
// in here store menu key to pizza option
foreach($data as $key => $path)
{
	$data["$key"] = $menu_xml->xpath($path);
}
