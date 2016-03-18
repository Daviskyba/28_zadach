<?php
echo '<p>'.'Задание №24'.'<p>';
$val2 = 1239459299999;
$valArray = str_split($val2);
$search = 9;
foreach($valArray as $key24 => $val3){
    if ($val3==$search){
        $result[] = 1;
    }
}
$result = array_sum($result);
echo 'Количество вхождений: '.$result."\n"."<br>";
?>