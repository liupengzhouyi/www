<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <style>
        h1
        {
            text-align: center;
            color: red;
            font-size: 32px;
            font-family: 华文楷体;
        }
        .button {
            background-color: #ff983c; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }
        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '»';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-08-04
 * Time: 15:49
 */

$lp_user_id = $_POST["lp_user_id"];
$lp_user_password = $_POST["lp_user_password"];

if ($lp_user_id == "" || empty($lp_user_id)) {
    echo "<h1>请输入你的id</h1>";
    include 'getInformation1.html';
} else {
    if ($lp_user_password == "" || empty($lp_user_password)) {
        echo "<h1>请输入密码</h1>";
        include 'getInformation1.html';
    } else {
        include 'linkdatabasetable1.php';
        $lp_user_id = "'" . $lp_user_id . "'";
        $sql = "SELECT lp_user_id, lp_user_name, lp_user_password FROM lp_user_table WHERE lp_user_id=$lp_user_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // 输出数据
            while($row = $result->fetch_assoc()) {
                $lp_id = $row["lp_user_id"];
                $lp_password = $row["lp_user_password"];
                $lp_name = $row["lp_user_name"];
                break;
            }
            if ($lp_password != $lp_user_password) {
                echo "<h1>密码错误！</h1>";
                include 'getInformation1.html';
            } else {
                $string = '<h1>欢迎您！' . $lp_name . '，登陆成功！</h1>';
                echo $string;
                ?>
                <a href="/index.php">
                    <center>
                        <button class="button">
                            返回首页
                        </button>
                    </center>
                </a>
<?php
            }
        } else {
            ?>
            <h1>
                <a href="/database/Registered/getuserinformation.html">
                    你没有在本网站中注册账号，因为没有您的信息！点击连接注册！
                </a>
            </h1>
            <?php
        }
        $conn->close();
    }
}

?>
</body>
</html>