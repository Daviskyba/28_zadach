<?php
echo '<p>'.'Задание №19'.'<p>';
$dayMart = array
("1"=>"Пн","2"=>"Вт","3"=>"Ср","4"=>"Чт","5"=>"Пт", "6"=>"Сб", "7"=>"Вс");
foreach($dayMart as $key10=>$val10){
    $day=$dayMart[4];
    if ($key10==4){
        echo $day.' = '.'<i>'.$val10.'</i>'."\n"."<br>";
    }else {echo $key10.' = '.$val10."\n"."<br>";
    }
}
echo "\n"."<br>";
?>