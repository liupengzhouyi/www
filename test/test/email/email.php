<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 8/18/2018
 * Time: 9:12 AM
 */
$to = "liupeng.00@outlook.com";         // 邮件接收者
$subject = "参数邮件";                // 邮件标题
$message = "Hello! 这是邮件的内容。";  // 邮件正文
$from = "liupeng.0@outlook.com";   // 邮件发送者
$headers = "From:" . $from;         // 头部信息设置
mail($to,$subject,$message,$headers);
echo "邮件已发送";
?>