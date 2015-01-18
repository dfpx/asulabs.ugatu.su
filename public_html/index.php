<?php
    $title='Расписание занятости дисплейных классов';
?>

<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Cuprum&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        
        <title><?php echo $title ?></title>
        
        <style>
            .headline {
                text-align: center;
                font-family: 'Cuprum', sans-serif;
                font-size: 24pt;
            }
        </style>
    </head>
    
    <body>
        <div class="headline"><?php echo $title ?></div>
        <div class="view_options">
            <input type="radio" name="view_mode" value="all">Весь семестр<br>
            <input type="radio" name="view_mode" value="week">По неделям<br>
        </div>
    </body>
</html>