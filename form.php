<?php
    $theme = $_POST['theme'];
    $email = $_POST['email'];
    $land_number = $_POST['land_number'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
    $file = $_POST['file'];

    $error = '';
    if (trim($theme) == '') {
        $error = 'Ошибка! Введите тему письма';
    }
    else if (trim($email) == '') {
        $error = 'Ошибка! Введите Email';
    }
    else if (trim($message) == '') {
        $error = 'Ошибка! Введите само сообщение';
    }

    if ($error != '') {
        echo $error;
        exit;
    }
    
    $send_to = 'sidav79357@beeplush.com';
    $mail_theme = 'тестовое сообщение с сайта';

    $subject = "=?utf-8?B?".base64_encode($mail_theme)."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
    mail($send_to, $subject, $message, $headers);

    // header("Location: /index.php");
?>