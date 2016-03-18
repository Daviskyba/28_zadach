<?php
echo '<p>'.'Задание №25'.'<p>';
$arr = array();
for ($s=0; $s<=9; $s++) {
    $arr[$s] = rand(0, 9);
}

echo "<pre>";
print_r($arr);
echo "</pre>";

$min = min($arr);
$max = max($arr);

$keyMin = array_search($min, $arr);
$keyMax = array_search($max, $arr);

$arr[$keyMin] = $max;
$arr[$keyMax] = $min;

echo "<pre>";
print_r($arr);
echo "</pre>";
?>