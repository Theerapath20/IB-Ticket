<?php 

    require_once('configlogin.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN & REGISTER</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
            footer{
                position: fixed;
                bottom: 0 ;
                width:100%
            }

            .conn{
              position: relative;
              
             /* position: absolute;*/
              right: 0;
              top: -60px;
              
            }
            button{
              
              top:20px;
              


                
              display:inline-block ;
              margin-left: 30px;
               position: relative;
    
            }
            a{
              border-radius:15px;

            }

            

            

    </style>
</head>
<body>


<?php
require_once("nav.php");



?>

<div class="px-4 py-5 my-5 text-center">
  
<div class="img"></div>
    <img class="d-block mx-auto mb-4" src="https://img.freepik.com/premium-vector/two-tickets-icon-illustration-ticket-entrance-event_385450-19.jpg?w=2000" alt="" width="300" height="300">

    
<div class="conn">
<h1 class="display-2 fw-bold">IBTICKET</h1>
<div class="col-lg-6 mx-auto">
      <!--<p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>-->
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a type="button" href="login.php" class="btn btn-primary btn-lg px-5 gap-3">Login</a>
        
        <!--<button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>-->
      </div>
    </div>
  </div>
</div>


  <?php
require_once("footerlogin.php");
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




</body>
</html>