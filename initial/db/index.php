<?php 
    $db_host = "127.0.0.1";
    $db_name = "labs";
    $db_user = "system";
    $db_pass = "somepass";
    $db_connect = mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());

    if (!$db_connect) {
        echo "<p>Сервер MySQL не отвечает.</p>";
        exit();
    }
        
    if (mysql_select_db($db_name, $db_connect)) echo "<p>База данных уже инициализирована.</p>";
	else {
        mysql_query("CREATE DATABASE $db_name") or die(mysql_error());
        echo "<p>База данных успешно создана.</p>";
    }

    mysql_select_db($db_name, $db_connect);
    mysql_query("CREATE TABLE IF NOT EXISTS lectures (
        ID INT AUTO_INCREMENT,
        FirstName TINYTEXT,
        SecondName TINYTEXT,
        ThirdName TINYTEXT,
        BirthDate DATE,
        Cabinet TINYTEXT,
        PRIMARY KEY(ID))") or die(mysql_error());
    echo "<p>Таблица «Преподаватели» инициализирована.</p>";

    mysql_query("CREATE TABLE IF NOT EXISTS rooms_schedule (
        ID INT AUTO_INCREMENT,
        Room INT,
        
        PRIMARY KEY(ID))") or die(mysql_error());
    echo "<p>Таблица «Расписание дисплеек» инициализирована.</p>";
	mysql_close();
?>

<html>
    <head>
        <title>Работа с базой данных</title>
    </head>
    <body>
        <!--
        <button>Создать</button>
        <button>Удалить</button>
        <button>Экспорт</button>
        <button>Бэкап</button>
        -->
    </body>
</html>
