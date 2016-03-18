<?php
echo '<p>'.'Задание №18'.'<p>';
$dayNed = array
("1"=>"Пн","2"=>"Вт","3"=>"Ср","4"=>"Чт","5"=>"Пт", "6"=>"Сб", "7"=>"Вс");

foreach($dayNed as $key10=>$val10){
    if ($key10<6){
        echo $key10.' = '.$val10."\n"."<br>";
    }else {echo $key10.' = '.'<b>'.$val10.'</b>'."\n"."<br>";
    }
}
?>