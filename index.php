<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <style>
        div#button
        {
            text-align: right;
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
<body>
<?php
include 'addAtUp.php';
?>

<div id="button">
    <a href="/database/Landing/getInformation1.html">
        <button class="button button1">
            <span>登陆 </span>
        </button>
    </a>
    <a href="/database/Registered/getuserinformation.html">
        <button class="button button2">
            <span>注册 </span>
        </button>
    </a>
</div>


<h1>
    <center>
        首页
    </center>
</h1>

<p>
<center>
    <b>
        数据库对中文支持有缺陷，用户名请设置英文，谢谢！
    </b>
    <br>
    <b>
        如何设置中文？
    </b>
    <br>
    <h3>
        马化腾说过：“充钱才会变强！”！
    </h3>
    <br>
    <h2>
        尽情期待：新的模块正在开发！
    </h2>
    <br>
    <h1 style="color: red">
        新功能是什么？
    </h1>
    <h1 style="color: green">
        你和你周围的小伙伴支付宝里的钱随着我的心情变化！
    </h1>
    <br>
    <h1 style="color: cyan">
        就问你：没什么好问的！打一个广告：我的好朋友<div style="color: darkblue">【白瑞祥同学至今没有女朋友】</div>，所以可以留下联系方式，下一次的开发会有留言板块！
    </h1>
</center>
</p>


<?php
include 'paly.php';
?>
</p></body>
</html>