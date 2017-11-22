<?php
ob_start();
session_start();
include "../connection/database.php";


if($_POST["userLogin"]){
    $usermail = $_POST["usermail"];
    $userpassword = $_POST["userpassword"];
    $cryptedpass = hash("sha256",$userpassword);


  $userfinder = $db->prepare("SELECT * FROM users WHERE usermail=:usermail and userpassword=:userpassword
");
    $userfinderArray = $userfinder->execute(array(
        "usermail" => "$usermail",
        "userpassword" => "$cryptedpass"
    ));
    $usercount = $userfinder->rowCount();
    if($usercount == 1){
        $_SESSION["user"] = $usermail;
        header("Location:../dashboard.php");
        exit;
    }
    else{
        header("Location:../login.php?access=denied");
        exit;
    }
}
