<?php
    $env = parse_ini_file('../../.env'); // инициализация .env файла
    require_once('../../vendor/autoload.php');
    use PHPMailer\PHPMailer\PHPMailer;
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';

    $subject = $_POST['theme'];
    $email = $_POST['email'];
    $land_number = $_POST['land_number'];
    $telephone = $_POST['telephone'];
    $user_message = $_POST['message'];
    

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
    else if ($_FILES['user-file']['size'] > (int)$env['MAX_FILE_SIZE'] * 1024 * 1024) {
        $error = 'Ошибка, размер файла более ' . $env['MAX_FILE_SIZE'] . ' МБ';
    }

    if ($error) {
        echo "<span style=\"color: var(--dark-red)\">" . $error . "</span>";
        exit(1);
    }
    

    // при использовании OpenServer, это не надо
    if (!$env['DEBUG']) {
        $mail->isSMTP();
        $mail->Host = $env['SMTP_HOST'];
        $mail->Port = (int)$env['SMTP_PORT'];
        $mail->SMTPAuth = true;
        $mail->Username = $env['USERNAME'];
        $mail->Password = $env['PASSWORD'];
        $mail->SMTPSecure = $env['SMTP_SECURE'];
    }
    $mail->setFrom($email);
    $mail->addAddress($env['MAIL_TO']);
    $mail->isHTML(true);

    $mail->Subject = $subject;
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
    $mail->Body = $message;
    
    if ($_FILES['user-file']) {
        $mail->addAttachment($_FILES['user-file']['tmp_name'], $_FILES['user-file']['name']);
    }
    
    if ($mail->send()) {
        echo "<span style=\"color: green\">Ваше сообщение успешно отправлено!</span>";
        exit(0);
    }
    else {
        echo "<span style=\"color: var(--dark-red)\">Ошибка при отправке сообщения!</span>";
        exit(1);
    }
?>