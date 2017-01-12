<?php

// access the model query
$xml = simplexml_load_file(M . 'menu.xml');

// xml now is a SimpleXMLElement object and has xpath
// function that render xpath queries on it

// get multiple queries from the controller
// in here store menu key to pizza option
foreach($data as $key => $path)
{
	$data["$key"] = $xml->xpath($path);
}

// printout for testing
//echo "<prev>";
//print_r($data);
//echo "</prev>";
