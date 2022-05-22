<?php
echo "swap two numbers \n";
function swap($x, $y) {
  echo "Before Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";

  //Swap technique
  $x = $x + $y;
  $y = $x - $y;
  $x = $x - $y;

  echo "After Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";
}

swap(10, 25);
?> 