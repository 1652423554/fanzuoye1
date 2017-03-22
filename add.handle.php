<?php
require_once '../connect.php';
$name=$_POST['name'];//以post形式添加的书的名字
$content=$_POST['content'];
$price=$_POST['price'];
echo $name;
$sql="INSERT INTO library(name,content,price) VALUES('$name','$content',$price)";
if(mysqli_query($con,$sql))
{
     echo "<script>alert('add success!');window,location.href='select.php';</script>";
}else{
     echo "<script>alert('add failed!');window,location.href='select.php';</script>";
}
//如果成功则弹出‘success’失败则弹出‘failed’