<?php if ( ! defined('ACCESS')) exit('Nuk keni qasje direkte')?>
<?php
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";

$results = mysqli_query($con, $sql);


if ($results)
	{
	while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
		{
			$salt = substr($row['password'],0,32);
			$password = sha1($salt.$pass);
			$password_from_db = substr($row['password'],32,strlen($row['password']));
			var_dump($password);			
			if($password == $password_from_db){
					
					//session_id('sessionid');
					$_SESSION['isloggedin']= TRUE;
					$_SESSION['userId'] = $row['id'];
					$_SESSION['name']= $row['name'];
					header("location: /projects");
			}
			else {
				
				var_dump ($password . "else 1");
				$data['raporti'] = "<p>Wrong email or password!</p>";
				$data['raporti'] .= "<p><a href='/login'>Go back to login</a></p>";
				 echo $twig->render('raporti.html', $data); 
				}
		    }
		}
	else
	{
		var_dump ($password . "else 2");
		$data['raporti'] = "<p>Wrong email or password!</p>";
		$data['raporti'] .= "<p><a href='/login'>Go back to login</a></p>";	
		 echo $twig->render('raporti.html', $data); 
	}
	
$data['view'] = "raporti";					
 echo $twig->render('raporti.html', $data);       
    //}
