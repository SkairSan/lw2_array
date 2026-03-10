<?php

$arr = [rand(-100,100), rand(-100,100), rand(-100,100), rand(-100,100)];

$min = $arr[0];
$minid = 0;
$max = $arr[0];
$maxid = 0;
for ($i = 0; $i < count($arr); $i++)
{
  if ($arr[$i] > $max) 
  {
    $max = $arr[$i];
    $maxid = $i;
  }
  elseif ($arr[$i] < $min) 
  {
    $min = $arr[$i];
    $minid = $i;
  }
}

for ($i = 0; $i < count($arr); $i++)
{
  echo $arr[$i].", ";
}
echo "\n";
$y = $arr[$maxid];
$arr[$maxid] = $arr[$minid];
$arr[$minid] = $y;

for ($i = 0; $i < count($arr); $i++)
{
  echo $arr[$i].", ";
}
?>
