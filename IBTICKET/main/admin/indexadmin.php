<?php 
    session_start();
    if (!isset($_SESSION['admin_login'])) {
        header("location: ../login.php");
    }
    require_once('../configlogin.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>    
</head>
<body>

    <?php 
        require_once("nav.php");
    ?>
    <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://cdn-icons-png.flaticon.com/512/78/78948.png" alt="" width="180" height="170">
        <?php 

            $user_id = $_SESSION['admin_login'];
            $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = :user_id");
            $stmt->bindParam(":user_id", $user_id);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

        ?>
    <h1 class="display-5 fw-bold">Welcome Admin, <?php echo $row['firstname'] ?></h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">This is admin page and you can control all data.</p>
    </div>
  </div>
  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <a type="button" href="Admin_index.php" class="btn btn-primary btn-lg px-5 gap-3">เข้าสู่หน้าต่างแอดมิน</a><!--โยนไปที่หน้าหลักindex/ main-->
  <?php 
    require_once("footer.php");
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>