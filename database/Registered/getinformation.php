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
        div.button
        {
            text-align: center;
            align-self: center;
        }
    </style>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-08-04
 * Time: 15:49
 */

$pwd1 = $_POST["lp_user_password"];
$pwd2 = $_POST["lp_user_temp_pwd"];
$lp_user_name = $_POST["lp_user_name"];
$lp_user_email = $_POST["lp_user_email"];

if ($lp_user_name == "" || empty($lp_user_name)) {
    echo "<h1>请输入你的用户名</h1>";
    include 'getuserinformation.html';
} else {
    if($pwd1 == "" ||  empty($pwd1)) {
        echo "<h1>请输入你的密码</h1>";
        include 'getuserinformation.html';
    }else{
        if ($lp_user_email == "" || empty($lp_user_email)) {
            echo "<h1>Pleas&nbsp;input&nbsp;your&nbsp;Email</h1>";
            include 'getuserinformation.html';
        } else {
            if($pwd2 =="" || empty($pwd2)) {
                echo "<h1>请输入你的确认密码</h1>";
                include 'getuserinformation.html';
            } else {
                if ($pwd1 != $pwd2) {
                    //密码不一致
                    echo "<h1>密码不一致</h1>";
                    include 'getuserinformation.html';
                } else {
                    include 'linkdatabasetable.php';

                    $lp_user_name = '\'' . $lp_user_name . '\'';
                    $lp_user_password = '\'' . $pwd1 . '\'';
                    $lp_user_email = '\'' . $lp_user_email . '\'';
                    /*$lp_datatime = '\'' . $lp_datatime . '\'';*/

                    $sql = "INSERT INTO lp_user_table (lp_user_name, lp_user_password, lp_user_email, lp_submission_datetime) VALUES ($lp_user_name, $lp_user_password, $lp_user_email, NOW());";

                    if ($conn->query($sql) === TRUE) {
                        $sql = "SELECT lp_user_id, lp_user_name, lp_user_password lp_user_email FROM lp_user_table WHERE lp_user_name=$lp_user_name AND lp_user_password=$lp_user_password AND lp_user_email=$lp_user_email";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // 输出数据
                            while ($row = $result->fetch_assoc()) {
                                $lp_id = $row["lp_user_id"];
                            }
                        }
                        ?>
                        <h1>注册成功</h1>
                        <h1>你的账号/ID/用户编号是:<?php echo $lp_id?></h1>
                        <a href="/index.php">
                            <center>
                                <button class="button">
                                    返回首页
                                </button>
                            </center>
                        </a>
                        <?php
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
            }
        }
    }
}
?>
</body>
</html>