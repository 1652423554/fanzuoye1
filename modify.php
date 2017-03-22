<?php 
   $name=$_GET['name'];
?>
<html>
<body>
<form action="modify.handle.php" method="post">
 name:<input type="text" name="name" value="<?php echo $name;?>"> <br>
 cnotent:<input type="text" name="content"><br>
 price:<input type="text" name="price"><br>
 <input type="submit" value="Ìá½»">
 </form>
 </body>
 </html>