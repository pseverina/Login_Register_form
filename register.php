<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Registartion form</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./register.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Mobile properties-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
  <?php 
        session_start();
        $_SESSION['message'] = "";
        $_SESSION['success'] = "SUCCESS";
        // Create connection
        $conn = new mysqli("localhost", "root", "", "Login");
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        
            if($_POST['register__input-password'] ==  $_POST['register__confirm-password']){
                $userFirstName = $conn->real_escape_string($_POST["register__firstname"]);
                $userLastName = $conn->real_escape_string($_POST["register__lastname"]);
                $userEmail = $conn->real_escape_string($_POST["login__input-email"]);
                $userPassword = $conn->real_escape_string($_POST["register__input-password"]);

                if($conn->connect_errno) {
                    die('ConnectError('.mysqli_connect_errno().')'
                    .mysqli_connect_error());
                } else {
                    $_SESSION['userfirstname'] = $userFirstName;
                    $_SESSION['userlastname'] = $userLastName;
                    $_SESSION['useremail'] = $userEmail;
                    $_SESSION['userpassword'] = $userPassword;
        
                    
                    $sql = "INSERT INTO USER (firstName, lastName, userEmail, password) "
                     . "VALUES ('$userFirstName', '$userLastName', '$userEmail', ' $userPassword')";
                    
                     if($conn->query($sql) === true){
                         header("location: welcome.php");
                     }else{
                        $_SESSION['message'] = "Произошла ошибка. К сожалению, Вы не зарегистрированы.";
                    }
                }
                
            }
            else{
                $_SESSION['message'] = "Пароли не совпадают.";
            }
        
        }
       ?>

      <div class="container-fluid" id="background">
          <div> 
            <div class="stars">
                <div class="twinkling">
                    <h1 id="header-name"> Добро Пожаловать!</h1>
                    <div class="alert alert-error" id="error"><?= $_SESSION['message'] ?></div>
                    <!-- Register Form -->
                    <form id="register_form" action="register.php" method="POST">
                        <!-- First Name-->
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label for="register__firstname" class="white-color"> First Name</label>
                                <input type="text" class="form-control" id="register__firstname" name="register__firstname" placeholder="Ваше Имя" required>
                            </div>
                        </div>
                        <!-- Last Name-->
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label for="register__lastname" class="white-color"> Last Name </label>
                                <input type="text" class="form-control" id="register__lastname" name="register__lastname" placeholder="Ваша Фамилия" required>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label for="login__input-email" class="white-color">Email address</label>
                                <input type="email" class="form-control" id="login__input-email" name="login__input-email" placeholder="Ваш email" required>
                            </div>
                        </div>
                        <!--Password -->
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label for="register__input-password" class="white-color">Password</label>
                                <input type="password" class="form-control" id="register__input-password" name="register__input-password" placeholder="Пароль" required>
                            </div>
                        </div>
                        <!-- Confirm Password-->
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label for="register__confirm-password" class="white-color"> Repeat Password</label>
                                <input type="password" class="form-control" id="register__confirm-password" name="register__confirm-password" placeholder="Повторите Пароль" required>
                            </div>
                        </div>
                        <!-- Registrartion button-->
                        <button type="submit" class="btn btn-light" id="btn_submit" value="Register" name="register"> Зарегестрироваться</button>
                    </form> 
                </div>     
            </div> 
          </div>
        </div>
  </body>


</html>