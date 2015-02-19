<?php if ( ! defined('ACCESS')) exit('Nuk keni qasje direkte');

session_destroy();
header("Location: /login");
 ?>