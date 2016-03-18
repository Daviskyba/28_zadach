<?php
echo '<p>'.'Задание №27'.'<p>';
echo "<table border='1'>";
$row=10;
$cols=10;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$col = $colors[array_rand($colors,1)];
for($i=1; $i<$row;$i++){
    echo "<tr>";
    for($e=1; $e<$cols; $e++){
        $col = $colors[array_rand($colors,1)];
        echo "<td style='background-color: $col'>". rand(0, 100) ."</td>";
    }
    echo "</tr>";
}
echo "<table>";
echo "\n"."<br>";
?>