<?php
    require_once 'config.php';
    //mysqli_connect连接数据库
    if(!$con=mysqli_connect(HOST, USERNAME, PASSWORD))
    {
        echo mysqli_error();
    }
    //选择数据库，注意需要加引号
    if(!mysqli_select_db($con, 'test'))
    {
        echo mysqli_error();
    }
    //设置编码类型，显示中文
    if(!mysqli_query($con,'set names utf8')){
        echo mysqli_error();
    }
    