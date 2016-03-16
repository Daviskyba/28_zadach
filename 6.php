<?php
echo '<p>'.'Задание №6'.'<p>';
$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой',);
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой');
foreach ($arr as $key => $item) {
    echo "<pre>";
    $en[] = $key;
    $ru[] = $item;
}
var_dump($en);
var_dump($ru);
?>