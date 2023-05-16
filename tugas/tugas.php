<?php

// segitiga

$height = 15;

for ($row = 1; $row <= $height; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo "# ";
    }
    echo "<br/>";
}

// 2. Implode
$array = ["PHP", "JAVASCRIPT", "LARAVEL"];
echo implode(", ", $array);
echo "<br>";
$explode = "PHP, JAVASCRIPT, LARAVEL";
$arrayExp =  explode(", ", $explode);
print_r($arrayExp);
