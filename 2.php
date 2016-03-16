<?php
echo '<p>'.'Задание №2'.'<p>';
$style = array('26', '17', '136', '12', '79', '15');
echo '<br>';
echo '<pre>';
foreach($style as $key => $value){
    echo "\$style[$key] = $value"."\n"."<br>";
}
$summa = 0;
foreach($style as $value){
    $summa += $value;
}
echo '<pre>';
echo "<strong>Результат = </strong>$summa";
?>
