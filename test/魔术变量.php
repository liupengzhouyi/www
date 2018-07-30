<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-07-29
 * Time: 11:29
 */
echo '这是第 " '  . __LINE__ . ' " 行';
echo '该文件位于 " '  . __FILE__ . ' " ';
echo '该文件位于 " '  . __DIR__ . ' " ';
function test() {
    echo  '函数名为：' . __FUNCTION__ ;
}
test();
class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();



?>