<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#1e76d1">
    <title>Adress Book | Hami ÇAKIR</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/main.css"/>
    <link rel="stylesheet" href="/css/ionicons.min.css"/>
</head>
<body>
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand align-items-center" href="index.php">Adress<b>BOOK</b></a>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">

                    <a href="javascript:void(0);" class="nav-link" onclick="openSearch()"><i class="ion ion-search"></i></a>
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
            <div class="col-md-4">
                <div class="adder">
                    <form>
                        <label class="label-file" for="file"><i class="ion ion-camera"></i> </label>
                        <input id="file" type="file" name="person_image" accept="image/jpeg,image/png,image/jpg" />
                        <input type="text" name="person_name" placeholder="Name Surname" />
                        <input type="tel" name="person_phone" placeholder="Phone Number" />
                        <input type="email" name="person_email" placeholder="E-mail" />
                        <textarea rows="10" placeholder="Adress"></textarea>
                        <input type="submit" value="Kaydet"/>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="adder">
                    <form>
                        <label class="label-file" for="file"><i class="ion ion-camera"></i> </label>
                        <input id="file" type="file" name="person_image" accept="image/jpeg,image/png,image/jpg" />
                        <input type="text" name="person_name" placeholder="Name Surname" />
                        <input type="tel" name="person_phone" placeholder="Phone Number" />
                        <input type="email" name="person_email" placeholder="E-mail" />
                        <textarea rows="10" placeholder="Adress"></textarea>
                        <input type="submit" value="Kaydet"/>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="adder">
                    <form>
                        <label class="label-file" for="file"><i class="ion ion-camera"></i> </label>
                        <input id="file" type="file" name="person_image" accept="image/jpeg,image/png,image/jpg" />
                        <input type="text" name="person_name" placeholder="Name Surname" />
                        <input type="tel" name="person_phone" placeholder="Phone Number" />
                        <input type="email" name="person_email" placeholder="E-mail" />
                        <textarea rows="10" placeholder="Adress"></textarea>
                        <input type="submit" value="Kaydet"/>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="adder">
                    <a class="new-contact" href="#"><i class="ion ion-android-add-circle"></i><span>New Contact</span></a>
                </div>
            </div>


        </div>
    </div>
</div>



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