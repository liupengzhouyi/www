<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>get your information</title>
</head>
<body>
<?php
$name = $_COOKIE["lpname"];
$password = $_COOKIE["lppassword"];
echo $name;
echo "<br>";
echo $password;
?>
</body>
</html>