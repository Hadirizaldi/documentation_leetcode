<?php

// function searchInsert($nums, $target)
// {
//   $left = 0;
//   $right = count($nums) - 1;

//   while ($left <= $right) {
//     $mid = $left + floor(($right - $left) / 2);

//     if ($nums[$mid] === $target) {
//       return $mid;
//     } elseif ($nums[$mid] > $target) {
//       $right = $mid - 1;
//     } else {
//       $left = $mid + 1;
//     }
//   }

//   return $left;
// }

function searchInsert($nums, $target)
{
  $index = array_search($target, $nums);
  var_dump($index);

  if ($index == false) {
    array_push($nums, $target);
    sort($nums);
    $index = array_search($target, $nums);
  }
  return $index;
}

$input = [1, 3, 5, 6];
$target = 7;

$check = searchInsert($input, $target);

var_dump($check);
