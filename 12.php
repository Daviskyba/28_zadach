<?php
echo '<p>'.'Задание №12'.'<p>';
$n = 1000;
$m = 0;
do {$m++;
    echo $n .'<br>';
    $n = $n / 2;
}
while ($n >= 50);
echo "$n<pre>";
echo "$m Интераций";

?>