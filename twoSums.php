<?php

function twoSums($nums, $target): array
{
  $numMap = array();
  $result = array();

  foreach ($nums as $index => $num) {
    $complement = $target - $num;

    if ($numMap[$complement] !== NULL) {
      $result[] = $index;
      $result[] = $numMap[$complement];
    }
    $numMap[$num] = $index;
  }
  return $result;
}

$nums1 = [2, 7, 11, 15];
$target = 9;
$collect = twoSums($nums1, $target);

var_dump($collect);
