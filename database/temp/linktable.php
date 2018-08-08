<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-08-04
 * Time: 15:47
 */
$servername = "localhost:3306";
$username = "root";
$password = "lp184126";
$database = "web_database_for_php";

$lp_datatime = date("Y-m-d H:i:s");
$lp_datatime = '\'' . $lp_datatime . '\'';
// 创建连接
$conn = new mysqli($servername, $username, $password, $database);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}


$sql = "INSERT INTO lp_user_table (lp_user_name, lp_user_password, lp_user_email, lp_submission_datetime)
VALUES ('刘鹏', 'lp184126', 'LIUPENG.0@outlook.com', $lp_datatime);";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>