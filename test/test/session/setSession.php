<!DOCTYPE html>
<?php
    session_start();
    /*$_SESSION['views']=1;*/
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Set Session</title>
</head>
<body>

<?php
if (isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views'] + 1;
} else {
    $_SESSION['views'] = 1;
}
echo "numbers: " . $_SESSION['views'];
?>
</body>
</html>