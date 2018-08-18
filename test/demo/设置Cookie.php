<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-07-29
 * Time: 23:06
 */
setcookie("user", "liupeng", time()+3600);
echo $_COOKIE["user"];
?>