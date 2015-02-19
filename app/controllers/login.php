<?php if ( ! defined('ACCESS')) exit('Nuk keni qasje direkte'); ?>

<?php
$data['title'] = "Login Page";
$data['view'] = "login";

echo $twig->render('login.html', $data);