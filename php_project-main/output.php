<?php 

  if (isset($_POST['Submit'])) {
   	echo "user name is ".$_POST['name']."<br>"."<br>";

    echo "user email is =>".$_POST['email']."<br>"."<br>";
   
   	echo "user phonenumber is => ".$_POST['phonenumber']."<br>"."<br>";
   	
   	echo "user age is => ".$_POST['age']."<br>"."<br>";

    $password = $_POST['password'];
   $hashed_password = password_hash($password, PASSWORD_DEFAULT);

   echo"user password is =>". $hashed_password;
    } 


?>