<?php
//db ,Routing ,Appname ,base url,BaseDirectorty info 

define('APP_NAME','IMDB');
define("BASE_URL","http://localhost:8080/IMDB/");
define("BASE_DIR","/IMDB/");

$tmp = explode('?', strtoupper($_SERVER['REQUEST_URI']));
define('CURRENT_ROUTE', str_replace(BASE_DIR,'',$tmp[0]));

define('DB_HOST','localhost');
define('DB_NAME','imdb');
define('DB_USERNAME','root');
define('DB_PASSWORD','');


