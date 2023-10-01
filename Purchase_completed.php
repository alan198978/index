<?php
//获取PayPal返回的数据
$item_number = $_POST['item_number']; //商品编号
$txn_id = $_POST['txn_id']; //交易ID
$payment_status = $_POST['payment_status']; //支付状态
$payment_amount = $_POST['mc_gross']; //支付金额

//在这里处理你的逻辑，比如更新数据库，发送确认邮件等

//显示给用户的信息
echo "感谢你支付款项。你的交易已完成，系统已通过电子邮件发送购物收据给你。请登录你的 PayPal 帐户查看交易详细信息。";

//你可以在这里编写代码，将交易信息保存到数据库中
//比如，你可以将$item_number、$txn_id、$payment_status、$payment_amount等信息保存到数据库中

//发送电子邮件给买家
$to = "buyer@example.com"; //买家的邮箱地址
$subject = "交易完成通知";
$message = "感谢你的购买。交易详情：交易ID：" . $txn_id . "，支付金额：" . $payment_amount;
$headers = "From: webmaster@example.com"; //你的邮箱地址
mail($to, $subject, $message, $headers);
?>


