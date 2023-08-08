<?php

function countNegatives($grid)
{
  $count = 0;
  $rows = count($grid);
  $cols = count($grid[0]);

  $r = 0;
  $c = $cols - 1;

  while ($r < $rows && $c >= 0) {
    if ($grid[$r][$c] < 0) {
      $count += ($rows - $r);
      $c--;
    } else {
      $r++;
    }
  }

  return $count;
}

$grid = [[4, 3, 2, -1], [3, 2, 1, -1], [1, 1, -1, -2], [-1, -1, -2, -3]];
$grid2 = [[3, 2], [1, 0]];
$grid3 = [[3, 2], [-3, -3], [-3, -3], [-3, -3]];
$check = countNegatives($grid3);

var_dump($check);
