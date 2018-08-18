<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Processing information</title>
</head>
<body>
<?php
$lp_name = $_POST["lp_name"];
$lp_password = $_POST["lp_password"];
setcookie("lpname", $lp_name, time() + 60 * 60 * 24);
setcookie("lppassword", $lp_password, time() + 60 * 60 * 24);
?>

<h1>
    <center>
        设置cookie完成！
    </center>
</h1>

</body>
</html>