<?php
// array = "variable" which can hold more than one value at time

$foods = array("apple", "orange", "banana", "coconut");

$foods[0] = "pineapple";

array_push($foods, "pineapple");
array_pop($foods);
array_shift($foods);

$reverse_foods = array_reverse($foods);

foreach ($foods as $food) {
    echo $food . "<br>";
}

echo "<br>";

foreach ($reverse_foods as $rf) {
    echo $rf . "<br>";
}
