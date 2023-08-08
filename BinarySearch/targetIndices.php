<?php

function targetIndices($nums, $target): array
{
  // sorting
  sort($nums);

  // make index => value array
  $indices = array();
  foreach ($nums as $key => $num) {
    $indices[] = [$key, $num];
  }

  // target == value
  $result = array();
  foreach ($indices as $pair) {
    if ($pair[1] === $target) {
      $result[] = $pair[0];
    }
  }
  return $result;
}

$nums_1 = [1, 2, 5, 2, 3];
$nums_2 = [1, 2, 5, 2, 3];
$target = 2;


$check = targetIndices($nums_1, $target);

var_dump($check);
