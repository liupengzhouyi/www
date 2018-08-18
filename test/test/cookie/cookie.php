<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>
<?php
    /*setcookie("user", "liupeng", time()+60*60*2);*/
    if (isset($_COOKIE["user"])) {
        echo $_COOKIE["user"];
    } else {
        echo "普通用户！";
    }
?>
</body>
</html>