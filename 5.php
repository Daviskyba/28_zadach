<?php
echo '<p>'.'Задание №5'.'<p>';
$arr1 = array('1' =>'Коля', '2' =>'Вася', '3' =>'Петя');
$arr2 = array('200', '300', '400');

foreach(array_combine($arr1, $arr2) as $people => $money) {
    print $people . ' - Зарплата &nbsp' . $money . '&nbsp Долларов <br />';
}
?>