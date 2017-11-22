<?php
include "../connection/database.php";

if($_POST["userRegister"]){
    $usermail = $_POST["usermail"];
    $userpassword = $_POST["userpassword"];
    $userpassword2 = $_POST["userpassword2"];
    if($userpassword == $userpassword2){
        $cryptedpass = hash("sha256", $userpassword);
        $usercreate = $db->prepare("INSERT INTO users SET 
          usermail=:usermail,
          userpassword=:userpassword
        ");
        $usercreateArray = $usercreate->execute(array(
           "usermail" => "$usermail",
           "userpassword" => "$cryptedpass"
        ));
        if($usercreateArray){
            header("Location:../login.php?register=ok");
            exit;
        }
        else{
            header("Location:../register.php?error=wrong");
        }

    }
    else{
        header("Location:../register.php?password=dmatch");
        exit;
    }


}