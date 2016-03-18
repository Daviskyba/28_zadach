<?php
echo '<p>'.'Задание №14'.'<p>';
$array5 = array(4, 2, 5, 19, 13, 0, 10);
$e = 2;
foreach ($array5 as $e) {
    if ($e == 2 ||$e ==3 || $e == 4) {
        echo $e . '=' . "Есть<pre>";
    } else {
        echo $e . '!=' . "Нет<pre>";
    }
}
?>


