<?php
  include("./class/user.php");
    $user=new user();
    $a=$user->login("vidu1@gmail.com","vidu1");
    foreach($a as $key=>$value){
        echo $value;
    }

    echo Session::get('name');
    

?>