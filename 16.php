<?php
echo '<p>'.'Задание №16'.'<p>';
$array8 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($array8 as $key8=>$val8){
    echo $val8;
    if ($val8==3 OR $val8==6 OR $val8==9){
        echo "\n"."<br>";
    } else {
        echo "&nbsp";
    }
}
echo "\n"."<br>";
?>