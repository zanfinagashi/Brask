<?php if ( ! defined('ACCESS')) exit('Nuk keni qasje direkte') ?>
<?php
$data['raporti'] = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){  
        
        $name = trim(filter_var($_POST['name'],FILTER_SANITIZE_STRING));
        $surname = trim(filter_var($_POST['surname'],FILTER_SANITIZE_STRING));
        $email =trim(filter_var($_POST['email'],FILTER_SANITIZE_EMAIL));
        $conf_email =trim(filter_var($_POST['conf_email'],FILTER_SANITIZE_EMAIL));
        $password = trim(filter_var($_POST['password'],FILTER_SANITIZE_STRING));
        $conf_password = trim(filter_var($_POST['conf_password'],FILTER_SANITIZE_STRING));;
        
        if($name != "" AND $surname != "" AND $email != "" AND $conf_email != "" AND $password != "" AND $conf_password != ""){                
                
             
                $name = $name . " ". $surname;
                $sql = "SELECT * FROM users where email = '$email'";
                $results = mysqli_query($con, $sql);
				$results = mysqli_fetch_array($results, MYSQLI_ASSOC);
				                                
                if($results){
                        $data['raporti']= "This email is already in use by another account!";
						                }
				if (strlen($data['raporti']) > 0)
				{
						$data['view'] = "raporti";
				}
                
                else{
                        if($email == $conf_email AND $password == $conf_password){
                               
                               
                               //Inserting new user data into the database
                               $salt = uniqid(mt_rand(), true);
							   $salt = substr($salt, 0, 32);
                               $password = sha1($salt.$password);
                               $password = $salt.$password;
							   var_dump($password);
							   var_dump ("    end of password.       salt:");
							   var_dump($salt);
                               $query = "INSERT INTO users ( email, password, name) VALUES ('$email','$password', '$name')";
                               $execute_query = mysqli_query($con, $query);
                               
                               // Uploading user image
                              
							  if(isset($_POST["file"])){
                               $query_get_user_id = "SELECT * from users WHERE email = '$email' AND password = '$password' LIMIT 1";   
							   $execute_query_user_id = mysqli_query($con, $query_get_user_id);
							   $execute_query_user_id = mysqli_fetch_array($execute_query_user_id, MYSQLI_ASSOC);
                               if(isset($_FILES['file'])){
                                       $file = $_FILES['file'];
                                       
                                       $file_name = $file['name'];
                                       $file_tmp = $file['tmp_name'];
                                       $file_size = $file['size'];
                                       $file_error = $file['error'];
                                       
                                       $file_ext = explode(".",$file_name);//Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter(in the case the dot(.)).
                                       $file_ext = strtolower(end($file_ext));//the last substring is the file extension  
                                       
                                       $allowed = array('jpg', 'png');
                                       if(in_array($file_ext, $allowed)){
                                               if($file_error === 0){
                                                       if($file_size <= 209152){
                                                               
                                                               $file_name_new =  $execute_query_user_id['id']. "." . $file_ext;
                                                               $file_destination = 'assets/img/'. $file_name_new;
                                                               
                                                               if(move_uploaded_file($file_tmp, $file_destination)){
                                                                       header("location: profile.php");
                                                               }
                                                       }
                                                       else{
                                                               $data['raporti'] ="The file is too large!File size must not exceed the maximum of 200Kb.";
                                                       }
                                               }
                                               else{
                                                       $data['raporti'] = $file_error;
                                               }
                                       }
                                       else{
                                               $data['raporti'] = "Unsupported file format! Only jpg and png are accepted.";
                                       }
                               }                         
							}
					   }
                        else{
                               $data['raporti'] = "Please make sure that your email/password and confirm email/confirm password fields match.";
                        }
					
					if(strlen($data['raporti'])>0)
					{
						$data['view'] = "raporti";
						echo $twig->render('raporti.html', $data);
						
						}else{
							$data['view'] = "projects";	
							echo $twig->render('projects.html', $data);
						}						
                }					
        }		
		
}else{
		$data['title'] = "Regjistrimi i anetareve";
		$data['view'] = "signup";
		
		echo $twig->render('signup.html', $data);
}
