<?php
  include("./class/user.php");
  $user=new user();
  echo json_encode($user->login($_POST['email'],$_POST['password'])); 
  
?>