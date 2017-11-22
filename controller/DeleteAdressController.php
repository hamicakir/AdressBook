<?php
include "../connection/database.php";
ob_start();
session_start();
if($_GET["id"]){
    $delete_id = $_GET["id"];

    $deleteAdress = $db->prepare("DELETE FROM adresses WHERE id=:id");
    $deleted = $deleteAdress->execute(array(
       "id" => "$delete_id"
    ));
    if($deleted){
        header("Location:../dashboard.php?deleted=ok");
        exit;
    }
    else{
        header("Location:../dashboard.php?deleted=no");
        exit;
    }
}