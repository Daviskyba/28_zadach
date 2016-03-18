<?php
echo '<p>'.'Задание №28'.'<p>';
echo "<table border=\"2\" cellspacing=\"0\" cellpadding=\"10\" width=\"30%\"><tr>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++)
        echo "<td>".($i*$j)."</td>";
    if ($i != 10) echo "</tr><tr>";
};
echo "</tr></table>";
?>

