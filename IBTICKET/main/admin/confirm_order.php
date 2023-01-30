
<?php

include_once 'dbConnect.php';
$ids=$_GET['id'];

$sql="UPDATE orders SET  status_order  = '2' WHERE id_order = '$ids' ";
$result=mysqli_query($db, $sql);
if($result){
    echo "<script>alert('ยืนยันสำเร็จ'); </script> ";
    echo "<script>window.location='Admin_index.php'; </script> ";
}else{
    echo "<script>alert('ไม่สามารถยืนยันได้'); </script> ";

}

mysqli_close($db);
?>