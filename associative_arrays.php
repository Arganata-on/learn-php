<?php
// associative array = An array made of key=>value pairs

// countries => capital
// id => username
// item => price

$capitals = array("USA" => "Washington D.C.", "Japan" => "Kyoto", "South Korea" => "Seoul", "India" => "New Delhi");

$capitals["USA"] = "Las Vegas";
$capitals["China"] = "Beijing";
array_pop($capitals);
array_shift($capitals);
$keys = array_keys($capitals);
$values = array_values($capitals);
$capitals_flip = array_flip($capitals);
$capitals_reverse = array_reverse($capitals);

foreach ($keys as $key) {
    echo $key  . "<br>";
}

echo "<br>";

foreach ($values as $value) {
    echo $value . "<br>";
}

echo "<br>";

foreach ($capitals_flip as $key => $value) {
    echo $key . " = " . $value . "<br>";
}

echo "<br>";

foreach ($capitals_reverse as $key => $value) {
    echo $key . " = " . $value . "<br>";
}

echo "<br>";

echo "Count: " . count($capitals);
