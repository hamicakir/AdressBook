<?php
include "../connection/database.php";
ob_start();
session_start();

if($_POST["formSave"]){
    $contact_name = $_POST["person_name"];
    $contact_phone = $_POST["person_phone"];
    $contact_email = $_POST["person_email"];
    $contact_text = $_POST["person_adress"];
    $usermail = $_SESSION["user"];
    $userCont = $db->prepare("SELECT * FROM users WHERE usermail=:usermail");
    $userCont->execute(array(
        "usermail" => "$usermail"
    ));
    $user_id = $userCont->fetch(PDO::FETCH_ASSOC);
    $userid = $user_id["id"];

    $adressSaver = $db->prepare("INSERT INTO adresses SET 
      user_id=:user_id,
      contact_name=:contact_name,
      contact_email=:contact_email,
      contact_phone=:contact_phone,
      contact_adress=:contact_adress
    ");
    $saved = $adressSaver->execute(array(
        "user_id" => "$userid",
        "contact_name" => "$contact_name",
        "contact_email" => "$contact_email",
        "contact_phone" => "$contact_phone",
        "contact_adress" => "$contact_text"
    ));
    if($saved){
        header("Location:../dashboard.php?saved=yes");
        exit;
    }
    else{
        header("Location:../dashboard?saved=no");
    }

}