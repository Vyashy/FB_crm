<?php
$to = "vasmarkiyan256@gmail.com"; // Ваш Электронный адрес

$product = "Машинка от катышек"; // Наименования продукта (с ценой)

$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));

$subject = 'Заказ товара - "'.$product.'"'; // заголовок письма
$sender="{$product} <noreply@{$_SERVER['HTTP_HOST']}>"; // Адрес отправителя
$header="Content-type:text/plain;charset=utf-8
From: {$sender}
";

$message = "ФИО: {$name}
Контактный телефон: {$phone}
Товар: {$product}

Сайт продажи: {$_SERVER['HTTP_HOST']}
Время покупки: ".date("m.d.Y H:i:s")."
IP покупателя: {$_SERVER['REMOTE_ADDR']}";
$success_url = 'form-ok.php?name='.$name.'&phone='.$phone.'';

$verify = mail($to,$subject,$message,$header);
if ($verify == 'true'){
    header("Location: $success_url");
    exit;
}
else
{
    echo '<h1 style="color:red;">Произошла ошибка!</h1>';
}
?>
