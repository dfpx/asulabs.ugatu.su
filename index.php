<?php
    $ResourceTitle='ASU Labs';
    $PageTitle='Расписание занятости дисплейных классов';
    $TitleSeparator='—';
    $Favicon='favicon.png';
    $BaseFont='http://fonts.googleapis.com/css?family=Cuprum&subset=latin,cyrillic';
    $ClockFont='http://fonts.googleapis.com/css?family=Nova+Mono';
    $ClockFontFamily='Nova Mono';
    $PageLink='http://rooms.asu.test';

    $Color0='#F7ECE1';
    $Color1='#CAC4CE'; # Обводящий
    $Color2='#8D86C9'; 
    $Color3='#725AC1';
    $Color4='#242038'; # Самый тёмный цвет

    date_default_timezone_set('Asia/Yekaterinburg'); #установка часового пояса не совсем понятно зачем
    
?>

<?php
    function getStudyWeek($Week) {
        if ($Week>35) $Week=$Week-34;
        else if ($Week<7) $Week=$Week+17;
        else if ($Week<25) $Week=$Week-6; 
        else $Week='неучебная';
        return $Week;
    }

// Определение номера учебной недели
    

// Перевод дня недели
    if (date("l")=='Monday') $DayOfWeek = 'Понедельник';
    if (date("l")=='Tuesday') $DayOfWeek = 'Вторник';
    if (date("l")=='Wednesday') $DayOfWeek = 'Среда';
    if (date("l")=='Thursday') $DayOfWeek = 'Четверг';
    if (date("l")=='Friday') $DayOfWeek = 'Пятница';
    if (date("l")=='Saturday') $DayOfWeek = 'Суббота';
    if (date("l")=='Sunday') $DayOfWeek = 'Воскресенье';
?>

<html>
    <head>
        <meta charset="utf-8">
        <script src="/libs/jquery-2.1.3.min.js"></script>
        <script src="clock.js"></script>
        <link rel="icon" href="<?php echo $Favicon ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo $Favicon ?>" type="image/x-icon">
        <link href='<?php echo $BaseFont ?>' rel='stylesheet' type='text/css'>
        <link href='<?php echo $ClockFont ?>' rel='stylesheet' type='text/css'>
        <title><?php echo $PageTitle, ' ', $TitleSeparator, ' ', $ResourceTitle ?></title>
        
        <script>
            $(document).ready(function () {
                $(".extra_options").hide();
                $(".show_extra_options").click(function () {
                    $(".show_extra_options").hide();
                    $(".extra_options").slideToggle("slow");
                });
            });
        </script>
        
        <style type="text/css">
            body {
                background: <?php echo $Color4 ?>;
                color: <?php echo $Color0 ?>;
                font-family: 'Cuprum', sans-serif;
            }
            a {
                 text-decoration: none;
                 color: <?php echo $Color0 ?>;
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
            .show_extra_options {
                   cursor: pointer;
            }
            .extra_options {
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
            <div class="headline"><?php echo $PageTitle?></div>
        </a>
        <div class="date-block">
            <?php echo $DayOfWeek ?> <slash>/</slash> <?php echo date("d.m.y") ?> <slash>/</slash> <?php echo getStudyWeek(date("W")) ?>-я неделя
            <div id="clock"></div>
        </div>
        <div class="menu">
            <ul class="menu_list">
                <li class="menu_link"><a href="/">Расписание занятости дисплейных классов</a></li>
                <li class="menu_link">Расписание установок медийного оборудования</li>
                <li class="menu_link">Заявки на установку ПО и настройку оборудования</li>
                <li class="menu_link">Схема локальной вычислительной сети</li>
                <li class="menu_link">Реестр IP/MAC</li>
                <li class="menu_link">Тестовые разделы</li>
                <!--<li class="menu_link">Список поручений</li>-->
                <!--<li class="menu_link">Список одолженного инвентаря</li>-->
                <li class="menu_link">О сервисе и лаборантах</li>
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
            <div class="show_extra_options">Показать дополнительные опции</div>
            <div class="extra_options">
                <label>Показать свободные в </label>
                <select multiple size="1">
                    <option value="t0" disabled>Выберите период:</option>
                    <option value="t1">1 пару (08:00 - 09:35)</option>
                    <option value="t2">2 пару (09:45 - 11:20)</option>
                    <option value="t3">3 пару (12:10 - 13:45)</option>
                    <option value="t4">4 пару (13:55 - 15:30)</option>
                    <option value="t5">5 пару (16:10 - 17:45)</option>
                    <option value="t6">6 пару (17:55 - 19:30)</option>
                    <option value="t7">7 пару (19:35 - 21:00)</option>
                </select>
                <label>с</label> <input type="text" size="1" min="1" max="23"> 
                по <input type="text" size="1" min="1" max="23"> неделю<br>
                <label style="font-size: 10pt;">Нажмите Ctrl для множественного выбора</label>
            </div>
        </div>
        <div class="schedule-table">
            <?php
                
            ?>
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