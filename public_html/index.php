<?php
    $Title='Расписание занятости дисплейных классов';
    $Favicon='';
    $BaseFont='http://fonts.googleapis.com/css?family=Cuprum&subset=latin,cyrillic';
    $ClockFont='http://fonts.googleapis.com/css?family=Nova+Mono';
    $ClockFontFamily='Nova Mono';
    $PageLink='http://rooms.asu.test';

    $Color0='#F7ECE1';
    $Color1='#CAC4CE'; # Обводящий
    $Color2='#8D86C9'; 
    $Color3='#725AC1';
    $Color4='#242038'; # Самый тёмный цвет

    date_default_timezone_set('Asia/Yekaterinburg'); #установка часового пояса
    
?>

<?php
    
// Определение номера учебной недели
    if (date("W")>35) $study_week=date("W")-34;
    else if (date("W")<7) $study_week=date("W")+17;
    else if (date("W")<25) $study_week=date("W")-6; #сомнительный метод
    else $study_week='неучебная';

// Перевод дня недели
    if (date("l")=='Monday') $day_of_week='Понедельник';
    if (date("l")=='Tuesday') $day_of_week='Вторник';
    if (date("l")=='Wednesday') $day_of_week='Среда';
    if (date("l")=='Thursday') $day_of_week='Четверг';
    if (date("l")=='Friday') $day_of_week='Пятница';
    if (date("l")=='Saturday') $day_of_week='Суббота';
    if (date("l")=='Sunday') $day_of_week='Воскресенье';
?>

<html>
    <head>
        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="clock.js"></script>
        <link href='<?php echo $BaseFont ?>' rel='stylesheet' type='text/css'>
        <link href='<?php echo $ClockFont ?>' rel='stylesheet' type='text/css'>
        <title><?php echo $Title ?></title>
        
        <style type="text/css">
            body {
                background: <?php echo $Color4 ?>;
                color: <?php echo $Color0 ?>;
                font-family: 'Cuprum', sans-serif;
            }
            a {
                 text-decoration: none;
            }
            label {
                color: <?php echo $Color0 ?>;
            }
            .menu {
                position: absolute;
                left: 10px;
                top: 5px;
                width: 250px;
            }
            .menu_link {
                margin-bottom: 7px;
            }
            .headline {
                text-align: center;
                font-size: 24pt;
                font-weight: 600;
                color: <?php echo $Color0 ?>;
            }
            .date-block {
                text-align: center;
                font-size: 21pt;
                margin-top: 8px;
                color: <?php echo $Color0 ?>;
            }
            slash {
                color: <?php echo $Color2 ?>;
            }
            #clock {
                font-family: <?php echo $ClockFontFamily ?>;
                font-size: 28pt;
                color: 
            }
            .navigation {
                position: relative;
                margin: 5px;
                overflow: auto;
                text-align: center;
            }
            .rooms {
                display: inline-block;
            }
            .room {
                display: inline;
                color: <?php echo $Color4 ?>;
                cursor: default;
                background: white;
                border: 2px <?php echo $Color2 ?> solid;
                margin: 5px;
                font-size: 24pt;
                padding: 1px 6px;
            }
            .view_options {
                display: inline-block;
                text-align: left;
                vertical-align: -7px;
            }
            .theme {
                display: block;
                position: fixed;
                right: 2px;
                bottom: 5px;
                width: auto;
                height: 25px;
            }
            .colorbox {
                height: 20px;
                width: 20px;
                display: inline-block;
                border: 1px <?php echo $Color2 ?> solid;
                margin: 2px;
            }
           
        </style>
    </head>
    
    <body>
        <a href="<?php echo $PageLink ?>">
            <div class="headline"><?php echo $Title ?></div>
        </a>
        <div class="date-block">
            <?php echo $day_of_week ?> <slash>/</slash> <?php echo date("d.m.y") ?> <slash>/</slash> <?php echo $study_week ?>-я неделя
            <div id="clock"></div>
        </div>
        <div class="menu">
            <ul class="menu_list">
                <li class="menu_link">Расписание установок медийного оборудования</li>
                <li class="menu_link">Заявки на установку ПО</li>
                <li class="menu_link">Список поручений</li>
                <li class="menu_link">Список одолженного инвентаря</li>
                <li class="menu_link">Список изменений модуля</li>
                <li class="menu_link">О лаборантах</li>
            </ul>
        </div>
        <div class="navigation">
            <ul class="rooms">
                <li class="room">113</li>
                <li class="room">213</li>
                <li class="room">215</li>
                <li class="room">217</li>
                <li class="room">310</li>
                <li class="room">317</li>
                <li class="room">319</li>
            </ul>
            <div class="view_options">
                <label><input type="radio" name="view_mode" value="all" id="view_all">Весь семестр</label><br>
                <label><input type="radio" name="view_mode" value="week" id="view_week" checked>По неделям</label><br>
            </div>
        </div>
        <div class="theme">
            <div class="colorbox" style="background: <?php echo $Color0 ?>;" title="<?php echo $Color0 ?>"></div>
            <div class="colorbox" style="background: <?php echo $Color1 ?>;" title="<?php echo $Color1 ?>"></div>
            <div class="colorbox" style="background: <?php echo $Color2 ?>;" title="<?php echo $Color2 ?>"></div>
            <div class="colorbox" style="background: <?php echo $Color3 ?>;" title="<?php echo $Color3 ?>"></div>
            <div class="colorbox" style="background: <?php echo $Color4 ?>;" title="<?php echo $Color4 ?>"></div>
        </div>
    </body>
</html>