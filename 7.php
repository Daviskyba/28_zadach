<?php
echo '<p>'.'Задание №7'.'<p>';
$array2 = array(2, 5, 9, 15, 0, 4);
foreach ($array2 as $val){
    if ($val>3 && $val<10){
        echo "<pre>$val";
    }
}
?>