<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-07-31
 * Time: 12:29
 */
$int = 123;
if (!filter_var($int, FILTER_VALIDATE_INT)) {
    echo "不是一个合格的整数";
} else {
    echo "这是一个合格的整数";
}
?>