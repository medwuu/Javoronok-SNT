<?php
    $env = parse_ini_file('../../.env'); // инициализация .env файла
    $subject = $_POST['theme'];
    $email = $_POST['email'];
    $land_number = $_POST['land_number'];
    $telephone = $_POST['telephone'];
    $user_message = $_POST['message'];
    // TODO: обработка файла
    

    $error = '';
    if (trim(!$subject)) {
        $error = 'Ошибка! Введите тему письма';
    }
    else if (!trim($email)) {
        $error = 'Ошибка! Введите Email';
    }
    else if (!trim($user_message)) {
        $error = 'Ошибка! Введите сообщение';
    }

    if ($error) {
        echo "<span style=\"color: var(--dark-red)\">" . $error . "</span>";
        exit(1);
    }
    
    $send_to = $env['MAIL_TO'];
    $subject = "=?utf-8?B?".base64_encode($subject)."?="; // структура, не поддающаяся объяснению. без неё не работает
    
    // формирую текст сообщения, используя html теги
    $message = "<b>От:</b> <i>$email</i>, ";
    if (trim($telephone)) {
        $message .= "<i><a href=\"$telephone\">$telephone</a></i>";
    }
    else {
        $message .= "телефон не указан";
    }
    $message .= "<hr>" . "<b>Номер участка:</b> ";
    if (trim($land_number)) {
        $message .= $land_number;
    }
    else {
        $message .= "не указан";
    }
    $message .= "<br><hr><br>" . $user_message;
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
    
    if (mail($send_to, $subject, $message, $headers)) {
        echo "<span style=\"color: green\">Ваше сообщение успешно отправлено!</span>";
        exit(0);
    }
    else {
        echo "<span style=\"color: var(--dark-red)\">Ошибка при отправке сообщения!</span>";
        exit(1);
    }
?>