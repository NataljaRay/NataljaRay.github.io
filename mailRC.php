<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $to      = "ray92v@gmail.com";
  $subject = "Заполнена контактная форма с сайта ".$_SERVER['HTTP_REFERER'];
//  $subject = "=?utf-8?B?".base64_encode("Сообщение с сайта Rabbit&Carrot");
  $message = "Имя: ".$_POST['name']."\nТелефон: ".$_POST['phone']."\nСообщение: ".$_POST['message'];
//  $headers = "From: admin@rabbit-carrot.ru";
//  $headers = "From: $email\r\nReply-to: $email\r\n\Content-type: text/html; charset=utf-8\r\n";
  $headers = "От: $name\r\n";


  $success = mail($to, $subject, $message, $headers);
  echo $success;
?>