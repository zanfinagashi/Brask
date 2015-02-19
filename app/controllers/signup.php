<?php if ( ! defined('ACCESS')) exit('Nuk keni qasje direkte'); ?>

<?php
$data['title'] = "Sign up Page";
$data['view'] = "signup";

echo $twig->render('signup.html',$data);