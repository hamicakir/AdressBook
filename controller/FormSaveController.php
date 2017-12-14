<?php
include "../connection/database.php";
ob_start();
session_start();
if($_POST["formSave"] == "Kaydet"){
    $target_dir = $_SERVER["DOCUMENT_ROOT"] . "/images/";
    print_r($_FILES["person_file"]);
    print_r($_POST);
    /*$file_name = $_FILES["person_filer"]["name"];
    $file_up_adress = $target_dir . $file_name;
    $contact_name = $_POST["person_name"];
    $contact_phone = $_POST["person_phone"];
    $contact_email = $_POST["person_email"];
    $contact_text = $_POST["person_adress"];


    $check = getimagesize($_FILES["person_filer"]["tmp_name"]);
    if($check != false) {
        $contact_image = $file_up_adress;
        move_uploaded_file($_FILES["person_filer"]["tmp_name"], $file_up_adress);
        if($contact_name == "" && $contact_phone == "" && $contact_email == "" && $contact_text == ""){
            header("Location:../dashboard.php?null=yes");
            exit;
        }
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
      contact_adress=:contact_adress,
      contact_image=:contact_image
    ");
        $saved = $adressSaver->execute(array(
            "user_id" => "$userid",
            "contact_name" => "$contact_name",
            "contact_email" => "$contact_email",
            "contact_phone" => "$contact_phone",
            "contact_adress" => "$contact_text",
            "contact_image" => "$contact_image"
        ));
        if($saved){
            header("Location:../dashboard.php?saved=yes");
            exit;
        }
        else{
            header("Location:../dashboard?saved=no");
            exit;
        }
    } else {
        header("Location:../dashboard.php?error=image");
        exit;
    }*/



}

