<?php if ( ! defined('ACCESS')) exit('Nuk keni qasje direkte'); ?>
<?php 

//-------------------------------- Fetching projects from the db to fill the dropdown 
$query_get_projects = "SELECT * from projects";   
$execute_query = mysqli_query($con, $query_get_projects);
	while ($row = mysqli_fetch_array($execute_query, MYSQLI_ASSOC)){
		
		$projects[] = $row;
	}



