<?php
echo '<p>'.'Задание №3'.'<p>';
$str = array(26, 17, 136, 12, 79, 15);
foreach ($str as $key=>$val) {
    echo $key .' = '. pow($val,2)."\n"."<br>";
    $str[$key]=pow($val,2);
}
$result = array_sum($str);
echo 'Результат = '.$result."\n";
echo "<br>";
?>