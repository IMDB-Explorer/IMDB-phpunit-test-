<?php

//call the config make obj from routing and run the prgramm
require_once ('system/config.php');

$router = new \system\router\Routing();
$router->run();