<?php

// create a array that stores all the information of menu
$data = array('menu' => '/menu');

// the data will be filled in the model
include(M . 'model.php');


// render menu table in browser
include (V . 'view.php');
