<?php 
session_start();
error_reporting(E_ALL);
define("ACCESS", 1);

$data = array();


$path  = PATH_SEPARATOR .'../app/libraries/vendor';
$path .= PATH_SEPARATOR .'../app/config';
$path .= PATH_SEPARATOR .'../app/controllers';
$path .= PATH_SEPARATOR .'../app/includes';
$path .= PATH_SEPARATOR .'../app/models';

set_include_path(get_include_path() . $path);

require("autoload.php");

require_once("config.php");

require_once("../app/config/db.php");



Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../app/views');
$twig = new Twig_Environment($loader, array(
    'cache' => '../app/cache', 
	'debug' => true
));

$url = explode("/", $_SERVER["PATH_INFO"]);
if(!empty($url[1])){
	
	$cmd = filter_var($url[1], FILTER_SANITIZE_STRING);
	
		switch($cmd){
			case 'login':
				require 'login.php';
				break;
			case 'check':
				require 'check.php';
				break;
			case 'register':
				require 'register.php';
				break;
			case 'projects':
				require 'projects.php';
				break;
			case 'logout':
				require 'logout.php';
				break;				
			case 'signup':
				require 'signup.php';
				break;
			default:
				$data['raporti'] = "Nuk ekziston kjo faqe";	
				$data['view'] = "raporti";

		}
}
else{
	include "login.php";
}

mysqli_close($con);
