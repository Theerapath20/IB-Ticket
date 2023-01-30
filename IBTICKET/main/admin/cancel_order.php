
<?php

include_once 'dbConnect.php';
$ids=$_GET['id'];

$sql="UPDATE orders SET  status_order  = '0' WHERE id_order = '$ids' ";
$result=mysqli_query($db, $sql);
if($result){
    echo "<script>alert('ยกเลิกสำเร็จ'); </script> ";
    echo "<script>window.location='Admin_index.php'; </script> ";
}else{
    echo "<script>alert('ไม่สามารถลบข้อมูลได้'); </script> ";

}

mysqli_close($db);
?>