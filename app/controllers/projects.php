<?php if ( ! defined('ACCESS')) exit('Nuk keni qasje direkte'); ?>

<?php
include('get_projects_model.php');

$data['projects'] = get_projects($con);
$data['title'] = "Projects";
$data['view'] = "projects";

echo $twig->render('projects.html', $data);