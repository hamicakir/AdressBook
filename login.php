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
</head>
<body>
<div class="bg-gradient">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 align-items-center">
                <h1>Login</h1>
                <h2 id="msg"> Giriş Yapıldı</h2>
                <form id="login-form" method="post" action="controller/LoginController.php">
                    <input id="usermail" type="email" class="form-input" name="usermail" placeholder="E-mail"/>
                    <input id="userpassword" type="password" class="form-input" name="userpassword" placeholder="Password"/>
                    <input id="userLogin" type="submit" class="form-input form-submit" name="userLogin"/>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>

