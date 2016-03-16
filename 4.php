<?php
echo '<p>'.'Задание №4'.'<p>';
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');


foreach ($arr as $key => $value) {
    echo "Ключ: $key; <br />\n";
}
foreach ($arr as $value) {
    echo " Значение: $value<br />\n";
}
?>