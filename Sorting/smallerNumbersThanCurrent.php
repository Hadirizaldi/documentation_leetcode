<?php

function smallerNumbersThanCurrent($nums): array
{
  $result = [];
  $length = count($nums);

  for ($i = 0; $i < $length; $i++) {
    $point = $nums[$i];
    $count = 0;

    for ($j = 0; $j < $length; $j++) {
      if ($nums[$j] < $point) {
        $count++;
      }
    }

    $result[] = $count;
  }
  return $result;
}


$nums = [8, 1, 2, 2, 3];
$check = smallerNumbersThanCurrent($nums);

var_dump($check);
