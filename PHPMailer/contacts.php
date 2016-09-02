<?php
require_once "config.php";
require_once "PHPMailerAutoload.php";
$email = $_POST['email'];
$body = "Email: $email";
//if(isset($_POST['btnsend'])) {
//    try {
        $mail = new PHPMailer(true); // Создаем экземпляр класса PHPMailer

        $mail->IsSMTP(); // Указываем режим работы с SMTP сервером
        $mail->Host = 'localhost';  // Host SMTP сервера: ip или доменное имя
        $mail->SMTPDebug = $__smtp['debug'];  // Уровень журнализации работы SMTP клиента PHPMailer
        $mail->SMTPAuth = $__smtp['auth'];  // Наличие авторизации на SMTP сервере
        $mail->Port = $__smtp['port'];  // Порт SMTP сервера
        $mail->SMTPSecure = $__smtp['secure'];  // Тип шифрования. Например ssl или tls
        $mail->CharSet = "UTF-8";  // Кодировка обмена сообщениями с SMTP сервером
        $mail->Username = $__smtp['username'];  // Имя пользователя на SMTP сервере
        $mail->Password = $__smtp['password'];  // Пароль от учетной записи на SMTP сервере
        $mail->AddAddress('rkulitskiy@gmail.com', '');  // Адресат почтового сообщения
//        $mail->AddAddress('support@elite-app.com', '');  // Адресат почтового сообщения
        $mail->AddReplyTo($__smtp['addreply'], '');  // Альтернативный адрес для ответа
        $mail->SetFrom($__smtp['username'], $__smtp['mail_title']);  // Адресант почтового сообщения
        $mail->Subject = htmlspecialchars($__smtp['mail_title']);  // Тема письма
        $mail->MsgHTML($body); // Текст сообщения
        $mail->Send();
//        if ($mail == true) {
//            echo '<script language="JavaScript">window.location.href="/";</script>';
//        }
//        return 1;
//
//    } catch (phpmailerException $e) {
//        return 2;
//    }
//}

?>