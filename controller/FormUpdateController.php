<?php
include "../connection/database.php";
ob_start();
session_start();
if($_POST["formUpdate"]){
    $id = $_POST["contact_id"];
    $contact_name = $_POST["person_name"];
    $contact_phone = $_POST["person_phone"];
    $contact_email = $_POST["person_email"];
    $contact_adress = $_POST["person_adress"];
    $update_at = date("m.d.y");

    $adressUpdate = $db->prepare("UPDATE adresses SET
      contact_name=:contact_name,
      contact_phone=:contact_phone,
      contact_email=:contact_email,
      contact_adress=:contact_adress,
      updated_at=:updated_at WHERE id=:id     
    ");
    $adressUpdater = $adressUpdate->execute(array(
            "contact_name" => "$contact_name",
            "contact_phone" => "$contact_phone",
            "contact_email" => "$contact_email",
            "contact_adress" => "$contact_adress",
            "updated_at" => "$update_at",
            "id" => "$id"
        ));
    if($adressUpdater){
        header("Location:../dashboard.php?update=yes");
        exit;
    }
    else{
        header("Location:../dashboard.php?update=no");
        exit;
    }


}
