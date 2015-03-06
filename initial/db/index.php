<?php 
    $db_host = "127.0.0.1";
    $db_name = "labs";
    $db_user = "system";
    $db_pass = "somepass";
    $db_connect = mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());

    if (!$db_connect) {
        echo "Сервер MySQL не отвечает.";
        exit();
    }
        
    if (mysql_select_db($db_name, $db_connect)) echo "<p>База данных уже инициализирована.</p>";
	else {
        mysql_query("CREATE DATABASE $db_name") or die(mysql_error());
        echo "База данных успешно создана.";
    } 
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
