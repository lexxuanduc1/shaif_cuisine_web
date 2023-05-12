<?php
  include("./class/user.php");
  $user=new user();
  echo json_encode($user->createUseraccount($_POST['email'],$_POST['password'],$_POST['name'],$_POST['address'])); 
 ?>