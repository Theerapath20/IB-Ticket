<?php
include 'dbConnect.php';

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
                                ตารางรายงานการสั่งซื้อสินค้า(ยืนยันการสั่งซื้อ)
                                <div class="buttoncolor mb-2 mt-2">
                                <a href ="Admin_index.php "><button type="button" class="btn btn-primary ">กำลังดำเนินการ</button></a>
                                <a href ="Admin_index_confirm.php "><button type="button" class="btn btn-success ">ยืนยันการสั่งซื้อ</button></a>
                                <a href ="Admin_index_cancel.php "><button type="button" class="btn btn-danger ">ยกเลิกการสั่งซื้อ</button></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">

                                    <thead>
                                        <tr>
                                            <th>เลขที่สั่งซื้อสินค้า</th>
                                            <th>ชื่อนามสกุล</th>
                                            <th>อีเมล</th>
                                            <th>เบอร์โทร</th>
                                            <th>ที่อยู่จัดส่ง</th>
                                            <th>วันที่สั่งซื้อ</th>
                                            <th>ราคาทั้งหมด</th>
                                            <th>สถานะ</th>
                                            <th>คำสั่ง</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr><!-- ฟีลที่จะกำหนดการค้นหาในช่องเซิท  ใส่ชื่อatt-->
                                            <th>id</th>
                                            <th>first_name</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>address</th>
                                            <th>modified</th>
                                            <th>grand_total</th>
                                            <th>status</th>
                                            <!--<th>slip</th>-->
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        <?php
                                        $sql = "SELECT   id_order, first_name, last_name, email, phone, address, modified, grand_total, status_order, slip
                                        
                                        FROM  customers
                                        
                                        LEFT JOIN orders ON customers.id_cus = orders.customer_id 
                                        WHERE status_order = '2'
                                        ORDER BY customer_id DESC" 
                                        ;

                                        $result = mysqli_query($db, $sql);
                                        $stmt = $db->prepare($sql);//
                                        while($row=mysqli_fetch_array($result)){
                                            $status = $row['status_order']
                                            
                                        ?>
                                    
                                        <tr>
                                            <td><?=$row['id_order']?></td>
                                            <td><?=$row['first_name']?> <?=$row['last_name']?></td>
                                            <td><?=$row['email']?></td>
                                            <td><?=$row['phone']?></td>
                                            <td><?=$row['address']?></td>
                                            <td><?=$row['modified']?></td>
                                            <td><?=$row['grand_total']?></td>
                                            <td><?#=$row['status_order'] ?>
                                            <?php
                                            if($status == 1){
                                                echo  "<b style = 'color:blue'>กำลังดำเนินการ</b>";
                                            }else if($status == 2){
                                                echo "<b style = 'color:green'>ยืนยันการสั่งซื้อ</b>";
                                            }else if($status == 0){
                                                echo "<b style = 'color:red'>ยกเลิกการสั่งซื้อ</b>";
                                            }
                                           
                                            ?>
                                        
                                        
                                        </td>
                                            <td>
                                            
                                            

                                                                <div class="btn-group">
                                                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"style='color:blue' href="info_order.php?id=<?=$row['id_order']?>">รายละเอียด</a></li><!--31.46-->
                                                                    <li><a class="dropdown-item" style='color:green' href="#">ปรับสถานะ</a></li>
                                                                    
                                                                    <li><hr class="dropdown-divider"></li>
                                                                    <li><a class="dropdown-item " style='color:red' href="cancel_order.php?id=<?=$row['id_order']?>"onclick="del(this.href);
                                                                    return false;">
                                                                    ยกเลิกการสั่งซื้อ </a></li>
                                                                </ul>
                                                                </div>

                                                    
                                            </td>
                                            
                                        </tr>
                                        <?php
                                        }
                                        #myaqli_close($db);
                                    ?>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
                
                
                
                
               <?php
               #require_once 'Adminfooter'
               ?>




            </div>
        </div>
                <?php
               require_once 'Adminfooter.php'
               ?>
       <!--java--->
       <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>-->
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
