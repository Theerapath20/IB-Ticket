
<?php
require_once 'configlogin.php';

?>







<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


        <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-ticket"></i>  <nbsp></nbsp> IBTICKET</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">link </a>
            <ul class="dropdown-menu" aria-labelledby="dropdown04">
              <li><a class="dropdown-item" href="login.php">Login</a></li>
              <li><a class="dropdown-item" href="register.php">Register</a></li>
              <li><a class="dropdown-item" href="indexlogin.php">IBTICKET</a></li>
            </ul>
          </li>
          

        </ul>
          
      </div>

      




    </div>
    <?php 
      
      $user_id = $_SESSION['user_login'];
      $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = :user_id");
      $stmt->bindParam(":user_id", $user_id);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      ?>

      
    

    
    <div class="col-md-3 text-end">
        <?php if (isset($_SESSION['user_login'])) { ?>
          <button class="btn btn-outline-light "><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?> </button>
            <a href="logout.php" class="btn btn-danger me-2">Logout</a>
        </div>
        <?php } else { ?>
            <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
            <a href="register.php" class="btn btn-primary">Sign-up</a>
        <?php } ?>
  </nav>