<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-08-04
 * Time: 16:58
 */
$servername = "localhost:3306";
$username = "root";
$password = "lp184126";
$database = "web_database_for_php";

// 创建连接
$conn = new mysqli($servername, $username, $password, $database);
?>