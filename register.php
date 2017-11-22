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
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/ionicons.min.css"/>
</head>
<body>
<div class="bg-gradient">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 align-items-center">
                <h1>Register</h1>
                <form method="post" action="controller/RegisterController.php">
                    <input type="email" class="form-input" name="usermail" required/>
                    <input type="password" class="form-input" name="userpassword" required/>
                    <input type="password" class="form-input" name="userpassword2" required/>
                    <input type="submit" class="form-input form-submit" name="userRegister"/>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

