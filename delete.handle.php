<?php
require_once '../connect.php';//路径
$name=$_GET['name']; 
$sql="DELETE FROM library WHERE name='$name'";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('delete success!');window,location.href='select.php';</script>";
    echo "<script>alert('delete failed!');window,location.href='select.php';</script>";
}
//如果成功则弹出‘success’失败则弹出‘failed’