<?php
include 'dbConnect.php';
$ids=$_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin page</title>

         <!--Cdn-->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/Adminstyles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    
    
    
    
    </head>

    <body class="sb-nav-fixed">
        
        
    <?php require_once 'navBarAdmin.php';?>
    <!--nav-->

    

  


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">รายงานการสั่งซื้อสินค้า</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Ticket Season 2022/23</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                รายละเอียดใบสั่งซื้อ
                                <div class="buttoncolor mb-2 mt-2">
                                <a href ="Admin_index.php "><button type="button" class="btn btn-primary ">กลับหน้าหลัก</button></a>
                                
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>เลขที่ใบสั่งซื้อ   เลขที่ #<?=$ids?></h5>
                                <table id="datatablesSimple" class="table table-striped">

                                    <thead>
                                        <tr>
                                            <th>รหัสสินค้า</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>ราคา</th>
                                            <th>จำนวน</th>
                                            
                                            
                                        </tr>
                                    </thead>

                                   

                                    <tbody>
                                        <?php
                                        $sql = "SELECT DISTINCT id_order, product_id ,order_id , name, price, quantity ,grand_total
                                        FROM  customers , products , orders , order_items 
                                        
                                        
                                        WHERE orders.id_order = order_items.order_id and order_items.product_id = products.id and orders.id_order = '$ids'
                                        order by order_items.product_id ";

                                        $result = mysqli_query($db, $sql);
                                        $total_bath=0;
                                        
                                        while($row=mysqli_fetch_array($result) ){
                                            $total_bath = $row['grand_total'];
                                        ?>
                                    
                                        <tr>
                                            <td><?=$row['product_id']?></td>
                                            <td><?=$row['name']?> </td>
                                            <td><?=$row['price']?> ฿</td>
                                            <td><?=$row['quantity']?></td>   
                                        </tr>
                                       
                                       <?php
                                        }
                                        ?>
                                    </tbody>
                                    
                                </table>
                                <b>ราคาสุทธิ <td><?= $total_bath?> Bath</td></b>
                                <!--
                                <img src="<?=$POST['slip']; ?>" class="card-img-top" alt="...">
                                    -->
                            </div>
                        </div>
                    </div>
                </main>
                
                
                
                
                
               <?php
               #require_once 'Adminfooter'
               ?>




            </div>
        </div>
       
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

        <script>
        function delcancel(mypage){
            var agree = confirm('คุณต้องการยกเลิกคำสั่งซื้อหรือไม่')
            if(agree){
                window.location=mypage;
            }
        }

        function delconfirm(mypage){
            var agree = confirm('คุณต้องการยืนยันคำสั่งซื้อหรือไม่')
            if(agree){
                window.location=mypage;
            }
        }
        </script> 
