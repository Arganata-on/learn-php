<?php
// Array = "variable" which can hold more than one value at time

$foods = ["apple", "orange", "banana", "coconut"];

$foods[0] = "mango";

array_push($foods, "pineapple", "kiwi");
array_pop($foods);
array_shift($foods);

foreach ($foods as $food) {
    echo $food . "<br>";
}
$foods = array_reverse($foods);

echo count($foods);
