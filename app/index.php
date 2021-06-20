<?php

include('system/config.php');// for load code the program start here 
include(__DIR__ . '/system/router/Routing.php');
include('system/traits/Redirect.php');
include('system/traits/View.php');
include('application/controller/Controller.php');
include('application/controller/Home.php');
include('system/bootstrap/boot.php');


//this is for db
//include ('application/model/CreateDB.php');
//use application\model\CreateDB;
//
//$db = new CreateDB();
//$db->run();

