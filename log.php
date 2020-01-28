<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();
 
 $username="";
 $password="";
 $errors=array();


$db=mysqli_connect('localhost','root','','webtrack');
 if(isset($_POST['login_user'])){
 	$username=mysqli_real_escape_string($db,$_POST['name']);
 	$password=mysqli_real_escape_string($db,$_POST['password']);

    
    //&& password='$password'
    $password=md5('$password_1');
    
 	  $query = "SELECT username,password FROM users WHERE username='$username' OR password='$password' ";
	  $res = mysqli_query($db, $query);

	 
       
       if (mysqli_num_rows($res) > 0) {
       	$_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
       	# code...
       }
       else{
       	echo $_SESSION['message']="invalid login";
       }
} 

?>