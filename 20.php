<?php
echo '<p>'.'Задание №20'.'<p>';
for ($x = 1; $x < 20; $x++)
{
    echo "$x<sup>$x</sup> = ".bcpow($x, $x).'<br>';
}
?>