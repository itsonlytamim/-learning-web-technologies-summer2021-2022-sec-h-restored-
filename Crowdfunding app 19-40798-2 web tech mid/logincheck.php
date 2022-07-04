<?php

    $userid = $_REQUEST["userid"];
    $pass = $_REQUEST["pass"];

    $file = fopen('reg.txt','r');
    if ($userid == null || $pass == null)
        {
            echo "Please enter valid username/password";
        }
        else
        {
            while(!feof($file))
            {
                $data = fgets($file);
                $user = explode("|",$data);              
                if ($userid == trim($user[1]) && $pass == trim($user[3]))
                {              
                   setcookie('status', 'go', time()+60, '/');	
                   session_start();
                   $_SESSION['name']=trim($user[0]); 
                   $_SESSION['ussrid']=trim($user[1]); 
                   $_SESSION['email']=trim($user[2]); 
                   $_SESSION['password']=trim($user[3]); 
			       header('location: adminhome.php?userid='.$user[1]);
		        }	
	        }

	       echo "invalid username/password";
        }
?>