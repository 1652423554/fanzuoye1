<?php
require_once '../connect.php';
$sql="SELECT * FROM library";
//#temp�Ǹ�mysqli_result���͵ı���
$temp=mysqli_query($con, $sql); 
//ͨ��mysqli_fetch_assoc���Է���$temp�е�id,name,content,price�ó�����ÿ��ȡ����һ��

while($row=mysqli_fetch_assoc($temp))    
{
    //��ÿ��ȡ������һ�����ݷ���$data���鵱��
    $data[]=$row;
}
?>

<a href="add.php">add</a><br>
<?php
//��$data�е�ÿ��Ԫ��$everyData�е�name��price���������
foreach($data as $everyData)
{ 
    echo $everyData['name'].":".$everyData['price'];
    echo $everyData['content'];
 ?>
    <a href="delete.handle.php?name=<?php echo $everyData['name'];?>">delete</a>
    <a href="modify.php?name=<?php echo $everyData['name'];?>">modify</a>
                  <!--  ��������������һ��ɾ��һ���޸� -->
    <?php 
    echo "<br>";
}
?>
