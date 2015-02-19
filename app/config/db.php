<?php if ( ! defined('ACCESS')) exit('Nuk keni qasje direkte');

//Database data
define("DB_HOST", "localhost");
define("DB_USER", "root"); // root
define("DB_PASS", ""); // zbrazet
define("DB_NAME", "brask");

//Connecting to the database


$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) OR die("Nuk munda te konektohem. Gabimi: ".mysqli_connect_error());
mysqli_set_charset($con, 'utf8');