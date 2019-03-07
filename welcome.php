<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Welcome!</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./register.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Mobile properties-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
      <?php session_start(); ?>
      <div class="container-fluid" id="background">
          <div> 
            <div class="stars">
                <div class="twinkling">
                    <div id="message" class="white-color">
                        <div class="alert alert-success"> <h3> <?= $_SESSION['success'] ?></h3></div>
                        <h2> Здравствуйте, <span><?= $_SESSION['userfirstname'] . $_SESSION['userlastname'] ?> </h2></span>
                        <h2> Ваш email <span><?= $_SESSION['useremail'] ?></span></h2> 
                        <h2> Ваш пароль <span><?= $_SESSION['userpassword'] ?></span></h2>
                    </div>
                </div>     
            </div> 
          </div>
        </div>
  </body>
</html>