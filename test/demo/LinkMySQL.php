<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-07-29
 * Time: 16:31
 */
$servername = "localhost:3306";
$username = "root";
$password = "lp184126";


// 创建连接
$conn = new mysqli($servername, $username, $password, "sys");

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";
$conn->close();

?>