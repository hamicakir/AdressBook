<?php
    include "connection/database.php";
    ob_start();
    session_start();
    if(!$_SESSION["user"]){
        header("Location:login.php?session=no");
        exit;
    }
    else{
        $session = $_SESSION["user"];
    }
    $userCont = $db->prepare("SELECT * FROM users WHERE usermail=:usermail");
    $userContArray = $userCont-> execute(array(
       "usermail" => "$session"
    ));
    $userArray = $userCont->fetch(PDO::FETCH_ASSOC);
    $userid = $userArray["id"];
    $adressTaker = $db->prepare("SELECT * FROM adresses WHERE user_id=:user_id");
    $adressTaker->execute(array(
            "user_id" => "$userid"
    ));
    $adressArray = $adressTaker->fetchAll(PDO::FETCH_ASSOC);
    $adressRows = $adressTaker->rowCount();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#1e76d1">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <title>Adress Book | Hami ÇAKIR</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/ionicons.min.css"/>
    <link rel="stylesheet" href="css/sweetalert2.min.css">
</head>
<body>
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand align-items-center" href="dashboard.php">Adress<b>BOOK</b></a>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">

                    <a href="javascript:void(0);" class="nav-link" onclick="openSearch()"><i class="ion ion-search"></i></a>
                </li>
                <li class="nav-item">
                    <a href="controller/LogoutController.php" class="nav-link"><i class="ion ion-android-exit"></i></a>
                </li>

            </ul>
        </nav>
    </div>
</header>
<div id="search">
    <a href="javascript:void(0);" onclick="closeSearch()"><i class="ion ion-close-round"></i></a>
    <input type="text" class="search-input" name="search" />
</div>
<div class="content">
    <div class="container">
        <div class="row">
            <?php
               for($i=0; $i<$adressRows;$i++){
                       ?>
                   <div class="col-md-4">
                       <div class="adder">
                           <form action="controller/FormUpdateController.php" method="post" enctype="multipart/form-data">
                               <a class="delete-link" onclick="alertDelete()" href="controller/DeleteAdressController.php?id=<?php echo $adressArray[$i]["id"]?>">
                                   <i class="ion ion-close"></i>
                               </a>
                               <label class="label-file" for="person_file">
                                   <?php
                                   if($adressArray[$i]["contact_image"] != ""){?>
                                       <img src="<?php echo $adressArray[$i]["contact_image"]; ?>"/>
                                 <?php }else{?>
                                       <i class="ion ion-camera"></i>
                                       <?php
                                       }
                                   ?>
                                   </label>
                               <input type="hidden" name="contact_id" value="<?php echo $adressArray[$i]["id"];?>"/>
                               <input id="person_file" type="file" name="person_filer">
                               <input type="text" name="person_name" placeholder="Name Surname" value="<?php echo $adressArray[$i]["contact_name"];?>">
                               <input type="tel" name="person_phone" placeholder="Phone" value="<?php echo $adressArray[$i]["contact_phone"];?>">
                               <input type="email" name="person_email" placeholder="E-mail" value="<?php echo $adressArray[$i]["contact_email"];?>">
                               <textarea rows="10" placeholder="Adress" name="person_adress"><?php echo $adressArray[$i]["contact_adress"]; ?></textarea>
                               <input type="submit" value="Güncelle" name="formUpdate">
                           </form>
                       </div>
                   </div>
                   <?php
               }

            ?>

            <?php
            if($adressRows == 0){?>
                <div id="contact" class="col-md-4 offset-4">
                    <div class="adder">
                        <a id="new-contact" class="new-contact" href="javascript:void(0);"><i class="ion ion-android-add-circle"></i><span>New Contact</span></a>
                    </div>
                </div>
            <?php }else{?>
                <div id="contact" class="col-md-4">
                    <div class="adder">
                        <a id="new-contact" class="new-contact" href="javascript:void(0);"><i class="ion ion-android-add-circle"></i><span>New Contact</span></a>
                    </div>
                </div>


            <?php } ?>



        </div>
    </div>
</div>
<script type="text/javascript" src="js/sweetalert2.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: hmica
 * Date: 21.10.2017
 * Time: 14:00
 */