<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-07-28
 * Time: 23:03
 */

include 'date.php';

echo "This is a test!";

$name="runoob";
$a= <<<EOF
    "abc"$name
    "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;

?>
