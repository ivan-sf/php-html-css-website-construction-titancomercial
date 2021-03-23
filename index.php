<?php
date_default_timezone_set('America/Bogota');
error_reporting(E_ALL);
ini_set('display_errors', '1');

//DIR
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__FILE__)) . DS);
define('DIRAPP', 'titan-website');
define("URL", 'https://titancomercial.co/' . DIRAPP . "/");
define("URL_SITIO", "#");
define("TITLE_APP", "TITAN COMERCIAL");
//DATABASE
define('HOSTDB', 'mysql.hostinger.co');
define('DB', 'u254469571_websitetitan');
define('USERDB', 'u254469571_titanroot');
define('PASSDB', 'Root1234');
//INIT CONTROLLER AND METHOD
define("INIT_CONTROLLER", "index");
define("INIT_METODO", "index");
require_once("config/autoload.php");
config\autoload::Run();
config\routes::run(new config\request());
?>