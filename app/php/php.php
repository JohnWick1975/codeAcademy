<?php
$names = ['Deinius', 'Petras', 'Tadas'];
var_dump($names);
//failo prijungimas
$file = "text.txt";

$fo = fopen($file, 'a') or die("can't open file");


fwrite($fo, implode($names, ", ") . ", " . "\n");

fclose($fo);

$content = file($file);
var_dump($content);
$new_array = [];
foreach ($content as $value) {
    $array = explode(", ", $value);
    array_pop($array);
    array_push($new_array, $array);
}
var_dump($new_array);

//rasom su file_put_content!

$names2 = ['Vitalik', 'Natali', 'Martin'];
var_dump($names2);
$file2 = "text2.txt";
file_put_contents($file2, implode($names2, ", ") . ", " . "\n", FILE_APPEND);
$content2 = file($file2);
var_dump($content2);
$new_array2 = [];
foreach ($content2 as $value) {
    $array2 = explode(", ", $value);
    array_pop($array2);
    array_push($new_array2, $array2);
}
var_dump($new_array2);
?>