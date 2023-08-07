<?php

function isPalindrome($word): bool
{
  $chars = str_split($word);
  $reverseChars = array_reverse($chars);

  for ($i = 0; $i < count($chars); $i++) {
    if ($chars[$i] !== $reverseChars[$i]) {
      return false;
    }
  }
  return true;
}

$word1 = "Aba";

$check = isPalindrome($word1);

var_dump($check);
