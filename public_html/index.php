<?php
    $title='Расписание занятости дисплейных классов';
    $favicon=''; #установка favicon
    $base_font='http://fonts.googleapis.com/css?family=Cuprum&subset=latin,cyrillic';
    $page_link='http://rooms.asu.test';

    $color0='white';
    $color1='#7C8EBF';
    $color2='#535F7F';
    $color3='#A5BEFF';
    $color4='#292F40';
    $color5='#95ABE5';

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
    if (date("l")=='Game Over') $day_of_week='День, когда Земля остановилась';

?>

<html>
    <head>
        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="clock.js"></script>
        <link href='<?php echo $base_font ?>' rel='stylesheet' type='text/css'>
        <title><?php echo $title ?></title>
        
        <style type="text/css">
            body {
                background: <?php echo $color1 ?>;
                color: <?php echo $color4 ?>;
                font-family: 'Cuprum', sans-serif;
            }
            a {
                 text-decoration: none;
            }
            .headline {
                text-align: center;
                font-size: 24pt;
                color: <?php echo $color0 ?>;
                text-shadow: 1px 1px <?php echo $color4 ?>;
            }
            .date-block {
                text-align: center;
                font-size: 21pt;
                margin-top: 8px;
                color: <?php echo $color0 ?>;
                text-shadow: 2px 2px 2px <?php echo $color5 ?>;
            }
            slash {
                color: <?php echo $color2 ?>;
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
                cursor: default;
                background: <?php echo $color0 ?>;
                border: 2px gray ridge;
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
                width: 150px;
                height: 25px;
            }
            .colorbox {
                height: 20px;
                width: 20px;
                display: inline-block;
                border: 1px <?php echo $color0 ?> ridge;
                margin: 2px;
            }
           
        </style>
    </head>
    
    <body>
        <a href="<?php echo $page_link ?>">
            <div class="headline"><?php echo $title ?></div>
        </a>
        <div class="date-block">
            <?php echo $day_of_week ?> <slash>/</slash> <?php echo date("d.m.y") ?> <slash>/</slash> <?php echo $study_week ?>-я неделя
            <div id="clock"></div>
        </div>
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
            <div class="colorbox" style="background: <?php echo $color1 ?>;" title="<?php echo $color1 ?>"></div>
            <div class="colorbox" style="background: <?php echo $color2 ?>;" title="<?php echo $color2 ?>"></div>
            <div class="colorbox" style="background: <?php echo $color3 ?>;" title="<?php echo $color3 ?>"></div>
            <div class="colorbox" style="background: <?php echo $color4 ?>;" title="<?php echo $color4 ?>"></div>
            <div class="colorbox" style="background: <?php echo $color5 ?>;" title="<?php echo $color5 ?>"></div>
        </div>
    </body>
</html>