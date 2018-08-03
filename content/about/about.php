<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>

    <link href="../Web/addAtUp.php">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        h2#lpAboutTitle
        {
            text-align-last: left;
            color: darkorange;
        }
        p#lpAboutTextInBody
        {
            text-align: left;
            font-size: 20px;
        }
        div.panel-success
        {
            border-radius: 12px;
        }
        div.panel-body
        {
            size: A4;
        }
        img
        {
            size: A3;
        }
        div#lpAboutImg
        {
            align-self: center;
            text-align: center;
        }
        h2#lpAboutEnd2, #lpAboutEnd1
        {
            text-align-last: center;
        }

    </style>
</head>
<body>
<?php
include 'addAtUp.php';
?>
<div class="panel panel-success">
    <div class="panel-heading">
        <h2 id="lpAboutTitle">
            关于
        </h2>
    </div>
    <div class="panel-body">
        <p id="lpAboutTextInBody">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            这是我的一个关于我学习一些其东西show,当然也会把其他的一些内容加进来。
            这个网站里面,我会逐步地把我学习的一些东西都放进来.
            也就是一些学习的时候所用的资料，教程，以及成果show.
            然后我按我的好朋友,知道我要做这个网站.纷纷发来贺电：
        </p>
    </div>
</div>
<h2 id="lpAboutEnd2">
    但是，我……
</h2>
<div id="lpAboutImg">
    <img src="/img/Snipaste_2018-08-03_19-32-20.png">
</div>

<h2 id="lpAboutEnd1">
    没有人会发来贺电的！
</h2>
</body>
</html>