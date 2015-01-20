<?php
    $title='Расписание занятости дисплейных классов';
    $favicon='';
    $base_font='http://fonts.googleapis.com/css?family=Cuprum&subset=latin,cyrillic';

    $color0='white';
    $color1='#7C8EBF';
    $color2='#535F7F';
    $color3='#A5BEFF';
    $color4='#292F40';
    $color5='#95ABE5';
    
?>

<html>
    <head>
        
        <link href='<?php echo $base_font ?>' rel='stylesheet' type='text/css'>
        <title><?php echo $title ?></title>
        
        <style type="text/css">
            body {
                background: <?php echo $color1 ?>;
                color: <?php echo $color4 ?>;
                font-family: 'Cuprum', sans-serif;
            }
            .headline {
                text-align: center;
                font-size: 24pt;
                color: <?php echo $color0 ?>;
                text-shadow: 1px 1px <?php echo $color4 ?>;
            }
            .navigation {
                position: relative;
                margin: 0 auto;
            }
            .rooms {
                display: inline-block;
            }
            .room {
                display: inline;
                background: <?php echo $color0 ?>;
                border: 2px gray ridge;
                margin: 5px;
                font-size: 24pt;
                padding: 1px 6px;
            }
            .view_options {
                display: inline-block;
            }
            .theme {
                display: block;
                position: float;
                right: 5px;
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
        <div class="headline"><?php echo $title ?></div>
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
                <input type="radio" name="view_mode" value="all">Весь семестр<br>
                <input type="radio" name="view_mode" value="week">По неделям<br>
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