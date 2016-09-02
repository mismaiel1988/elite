<?php
/**
 * Created by PhpStorm.
 * User: rkulitskiy
 * Date: 14.7.16
 * Time: 12.15
 
 */
$__smtp = array(
    "host" => 'smtpout.secureserver.net', // SMTP сервер
    "debug" => 0, // Уровень логирования
    "auth" => true, // Авторизация на сервере SMTP. Если ее нет - false
    "port" => '465', // Порт SMTP сервера
    "username" => 'autoreply@afamilyfriendgroup.org', // Логин запрашиваемый при авторизации на SMTP сервере
    "password" => 'H8Hqk]3j', // Пароль
    "addreply" => 'autoreply@afamilyfriendgroup.org', // Почта для ответа
    "secure" => 'ssl', // Тип шифрования. Например ssl или tls
    "mail_title" => 'Elite', // Заголовок письма
    "mail_name" => 'Имя отправителя' // Имя отправителя
);
