<?php
//подключение осуществляется к MySQL, то тип баз данных будет mysql:.
$driver = 'mysql';
//например, host=localhost (если сервер MySQL запущен локально).
$host = 'localhost';
//настройка dbname, которая устанавливает имя базы данных.
$db_name = 'infoForm';
// имя пользователя MySQL
$db_user = 'root';
//пароль для выше указанного пользователя
$db_pass = 'mysql';
//кодировка
$charset = 'utf8';

// экземпляр класс создаем через try и catch и пробрасываем наши параметры
try{
    // чтоб работала (настройки сервера) подключене и везде к нему обращаемся 
    $pdo = new PDO(
        "$driver:host=$host; dbname=$db_name; charset=$charset;",
        $db_user, $db_pass
    );
// если ошибка то появляется блок catch и пишется ошибка  
}catch (PDOException $i){
    die("Ошибка Подключения");
}



// $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];