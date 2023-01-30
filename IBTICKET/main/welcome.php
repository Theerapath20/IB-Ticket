<?php 
    session_start();
    if (!isset($_SESSION['user_login'])) {
        header("location: login.php");
    }
    require_once('configlogin.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register </title>
        <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .describe h2 {
            font-size: 23px;
        }
    </style>    
</head>
<body>

    <?php 
        require_once("nav.php");
    ?>
    <div class="px-4 py-5 my-5 text-center">
        <img src="" alt="">
    <img class="d-block mx-auto mb-4" src="https://uxwing.com/wp-content/themes/uxwing/download/peoples-avatars/user-profile-icon.png" alt="" width="150" height="150">
        <?php 

            $user_id = $_SESSION['user_login'];
            $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = :user_id");
            $stmt->bindParam(":user_id", $user_id);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

        ?>
    <h1 class="display-6 fw-bold">Welcome, <?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></h1>
    <div class="col-lg-8 mx-auto">
        
    <div class="describe">

        <h2 class="lead mb-4">Welcome to the football ticket trading website IBTICKET .
        <br>Buy tickets for your favorite football club matches.  
        Ready for you to experience <br>with the football ticket of your choice. provide both fun and excitement
        </h2>


    </div>
        

        <!--<p class="lead mb-4">ยินดีต้อนรับเข้าสู่เว็บไซต์ซื้อขายตั๋วฟุตบอล IBTICKET 
        <br>ซื้อบัตรเข้าชมการแข่งขันฟุตบอลสโมสรโปรดของคุณ  
        พร้อมให้คุณนั้น<br>ได้ร่วมเปิดประสบการต่างๆไปกับบัตรเข้าชมฟุตบอลที่คุณเลือก มอบทั้งความสนุก ตื่นเต้น
        </p>-->


      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <a type="button" href="index.php" class="btn btn-primary btn-lg px-5 gap-3">เข้าสู่หน้าหลัก</a><!--โยนไปที่หน้าหลักindex/ main-->
        
        
        <!--<button type="button" class="btn btn-outline-secondary btn-lg px-4">Home Page</button>-->
      </div>
    </div>
  </div>

  <?php 
    require_once("footer.php");
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>