<?php 
$adname = $_REQUEST['adname'];
$userid = $_REQUEST['userid'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$conpass = $_REQUEST["conpass"];
$gender = $_REQUEST["gender"];
$dob = $_REQUEST['dob'];
$UserType = $_REQUEST["UserType"];
$file = fopen('reg.txt','r');

if ($adname == null || $userid == null || $email == null || $pass == null || $conpass == null || $gender == null || $dob == null || $UserType == null)
        {
            echo "Please enter valid information";
        }
        else
        {
          while(!feof($file))
            {
                $data = fgets($file);
                $user = explode("|",$data);              
                if ($userid == trim($user[1]))
                {              
			            exit('user already exists'); 
		        }
            }
        }
                       
        if ($pass != $conpass)
        {
        echo "Password did not match, try again";
         }
        else
        {
        $file = fopen('reg.txt','a');
        $user = $adname."|".$userid."|".$email."|".$pass."|".$gender."|".$dob."|".$UserType."\r\n";
        fwrite($file,$user);
        header('location: loginadmin.html');
        }                                   		        

?>