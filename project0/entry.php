<?php

// constant
define('R', realpath(dirname(__FILE__)) . '/');
define('M', 'model/');
define('V', 'view/');
define('C', 'controller/');

// start controller
require(C.'controller.php');
