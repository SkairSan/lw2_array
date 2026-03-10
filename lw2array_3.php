<?php

$arr = [rand(0,5),rand(0,5),rand(0,5),rand(0,5),rand(0,5),
rand(0,5),rand(0,5),rand(0,5),rand(0,5),rand(0,5), ];

$maxposled = 1;
$posled = 1;
$number = $arr[0];

for ($i = 1; $i < count($arr); $i++) 
{
    if ($arr[$i] === $arr[$i - 1]) $posled++;
    else $posled = 1;
    
    if ($posled > $maxposled) 
    {
        $maxposled = $posled;
        $number = $arr[$i];
    }
}

echo implode(", ", $arr) . "\n";
echo "Самая длинная последовательность: ".$maxposled. " раз из числа ".$number;
?>
