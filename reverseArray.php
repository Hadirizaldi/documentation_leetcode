<?php

function reverse_array($arr): array
{
  $length = count($arr);

  for ($i = 0; $i <= 2; $i++) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$length - $i - 1];
    $arr[$length - $i - 1] = $temp;
  }

  return $arr;
}

// Contoh penggunaan:
$numbers = [1, 2, 3, 4, 5];
$reversedNumbers = reverse_array($numbers);
print_r($reversedNumbers);
