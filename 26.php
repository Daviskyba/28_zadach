<?php
echo '<p>'.'Задание №26'.'<p>';
$a = 6;
$result = 1;
for($b=0;$b<$a;$b++) {
    $arr[$b]=rand(0,100);
}
foreach ($arr as $element) {
    echo($element . " ")."\n";
}
echo "<br>"."\n";
for ($b=0;$b<$a;$b=$b+2) {
    if ($arr[$b] > 0) $result = $result * $arr[$b];
}

echo "Результат: ". $result . "<br>"."\n";
echo " Второй результат: "."\n";
for($b=1; $b < $a; $b+=2) {
    if($arr[$b] > 0){
        echo " " . $arr[$b]." "."\n";
    }
}
echo "\n"."<br>";
?>