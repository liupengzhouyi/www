<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-07-29
 * Time: 21:26
 */
$file = fopen("text.txt", "r") or exit("Can't open the file!");

while(!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
?>

