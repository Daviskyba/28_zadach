<?php
echo '<p>'.'Задание №13'.'<p>';
$nums = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
echo "<table border=\"2\" cellspacing=\"0\" cellpadding=\"10\" width=\"30%\"><tr>";
 foreach($nums as $i) {
     foreach($nums as $j)
         echo "<td>".($i*$j)."</td>";
    echo "</tr>";
 };
	 echo "</table>";
?>
