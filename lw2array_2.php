<?php

$matrix = [
    [rand(0,9), rand(0,9), rand(0,9)],
    [rand(0,9), rand(0,9), rand(0,9)],
    [rand(0,9), rand(0,9), rand(0,9)]
];

$sum = 0;
$size = count($matrix);

for ($i = 0; $i < $size; $i++) {
    $sum += $matrix[$i][$i];
}

foreach ($matrix as $row) {
    echo implode("\t", $row) . "\n";
}

echo "\nSum: " . $sum;
?>
