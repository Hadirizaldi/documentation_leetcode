<?php


function search($nums, $target)
{
  $left = 0;
  $right = count($nums) - 1;

  while ($left <= $right) {
    $mid = $left + intval(($right - $left) / 2);

    if ($nums[$mid] === $target) {
      return $mid;
    } elseif ($nums[$mid] < $target) {
      $left = $mid + 1;
    } else {
      $right = $mid - 1;
    }
  }

  return $mid;
}


$arrayNum = [-1, 0, 3, 5, 9, 12];
$target = 2;

$check = search($arrayNum, $target);

var_dump(floor((1 - 1) / 2));
