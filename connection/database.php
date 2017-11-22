<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=adress_book;charset=utf8", "root","");
}
catch(PDOException $exception){
    echo $exception->getMessage();
}