<?php
echo '<p>'.'Задание №1'.'<p>';
$style = array ('html', 'css', 'php', 'js', 'jq');
echo '<br>';
echo '<pre>';
foreach ($style as $key => $value) {
    echo "$key; $value <br />\n";
}
?>