<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

     
      <div class="col-md-3 text-end">
        <?php  if(isset($_SESSION['admin_login'])) { ?>
          <a href="logout.php" class="btn btn-danger me-2">Logout</a>
          <?php }?> 
        </div>
         
            
    </header>
  </div>