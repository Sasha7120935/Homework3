<?php
//$server = "localhost";
//$name_user = "root";
//$password_user = "";
//$db_user = "homework3";
//try {
//    $conn = new PDO("mysql:host=localhost;
//    dbname=homework3",
//        'root',
//        '');
//
//
////     if (empty($_POST['name'])) exit("Поле не заполнино");
//     if (empty($_POST['email'])) exit("Поле не заполнино");
//     if (empty($_POST['content'])) exit("Поле не заполнино");
//
//    $query = "INSERT INTO message  VALUES (NULL, :email , NOW())";
//    $msg = $conn->prepare($query);
//    $msg->execute(['email' => $_POST['email']]);
////    $msg = $conn->prepare($query);
////    $msg->execute(['email' => $_POST['email']]);
//
//
//    $msg_id = $conn->lastInsertId();
//
//    $query = "INSERT INTO message_content VALUES (NULL, :content, :message_id)";
//    $msg = $conn->prepare($query);
//    $msg->execute(['content' => $_POST['content'], 'message_id' => $msg_id]);






    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if (trim($name) == '')
        $error = 'введите ваша имя';
    elseif (trim($email) == '')
        $error = 'введите ваш email';
    elseif (trim($message) == '')
        $error = 'введите само сообщение';
    elseif (strlen($message) < 1)
        $error = 'Сообщение не должно быть более 1000 символов';

    if ($error != '') {
        echo $error;
        exit;
    }

    $mysql = new mysqli('localhost','root','','MyBD');

    $mysql->query("INSERT INTO users(name, email, Message ) VALUES('$name','$email','$message')");

    $mysql->close();

//
//   $subject = "=?utf-8?B?" . base64_encode("тестовое сообщение") . "?=";
////
//    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
//
////
//   mail('belousalek@gmail', '$subject' , '$message', '3');
//    mail("Alien777@i.ua", "Загаловок", "Текст письма  \n Тебе  сообщение  от  клиента (книги)");
   header('Location: /pages/contact.php');
//
//}
//
//catch (PDOException $e)
//{
//    echo "error" .$e->getMessage();
//}


 ?>
