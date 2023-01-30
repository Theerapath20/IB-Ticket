<?php 
    session_start();
    require_once('configlogin.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
            footer{
                position: fixed;
                bottom: 0 ;
                width:100%
            }
            
            .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            }

            .form-signin .checkbox {
            font-weight: 400;
            }

            .form-signin .form-floating:focus-within {
            z-index: 2;
            }
            .form-signin input[type="text"] {
            margin-bottom: 4px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }

            .form-signin input[type="text"] {
            margin-bottom: 4px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            }


            .form-signin input[type="email"] {
            margin-bottom: 4px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
            margin-bottom: 4px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            }





          
            
            

    </style>
</head>
<body>





<?php
require_once("nav.php");
?>
<main class="form-signin">
  <form action= "register_db.php" method="POST">
    
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php 
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            ?>
        </div>
    <?php } ?>

    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </div>
    <?php } ?>

    <?php if (isset($_SESSION['warning'])) { ?>
        <div class="alert alert-warning" role="alert">
            <?php 
                echo $_SESSION['warning'];
                unset($_SESSION['warning']);
            ?>
        </div>
    <?php } ?>
    
    
    <div class="form-floating">
      <input type="text" class="form-control" name = "firstname" placeholder="Enter your firstname">
      <label for="firstname">firstname</label>
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" name = "lastname" placeholder="Enter your lastname">
      <label for="lastname">lastname</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" name = "email" placeholder="name@example.com">
      <label for="email">Email </label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name = "password" placeholder=" Enter your Password">
      <label for="password">Password</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" name = "c_password" placeholder=" confirm Password">
      <label for="confirm password">confirm password</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-primary"name ="signup" type="submit">Sign up</button>
    <p class="mt-2 mb-3 text-muted">© created by IBTICKET</p>
  </form>
</main>




<?php
require_once("footerlogin.php");
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>