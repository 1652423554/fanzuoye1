<?php
require_once '../connect.php';  
$name=$_POST['name'];
$content=$_POST['content'];
$sql="UPDATE library SET content='$content' WHERE name='$name'";
if(mysqli_query($con,$sql))
{
     echo "<script>alert('modify success!');window,location.href='select.php';</script>";
}else{
     echo "<script>alert('modify failed!');window,location.href='select.php';</script>";
}
//如果成功则弹出‘success’失败则弹出‘failed’