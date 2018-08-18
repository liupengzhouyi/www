<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>input your information</title>
    <style>
        form{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="Processinginformation.php" method="post">
        name:<input type="text" name="lp_name">
        <br>
        password:<input type="password" name="lp_password">
        <br>
        <input type="reset" value="reset">&nbsp;&nbsp;
        <input type="submit" value="submit">
    </form>
</body>
</html>