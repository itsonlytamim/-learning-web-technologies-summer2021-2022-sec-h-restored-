<?php 

$userid = $_REQUEST['userid'];
$password = $_REQUEST['password'];
$name = $_REQUEST['name'];
$UserType=$_REQUEST['UserType'];

if($userid == null || $password == null || $name == null || $UserType == null){
	echo "null userid/password/name/UserType...";
}else{
		$user = $userid."|".$password."|".$name."\r\n";
		if($UserType =='Admin'){
			
		
		$file = fopen('adminlist.txt', 'a');

		fwrite($file, $user);
	  }
	 else{


		$file = fopen('userlist.txt', 'a');

		fwrite($file, $user);
	 }

}

?>