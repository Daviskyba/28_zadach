<?php
echo '<p>'.'Задание №15'.'<p>';
$array7 = array(4, 2, 5, 19, 13, 0, 10);
$count=count($array7);
echo  'Проверка итерации: '.$count."\n"."<br>";

$iter=0;
foreach($array7 as $ke => $val7){
    $iter++;

}
echo 'Итерации'.'='.$iter."\n"."<br>";
?>