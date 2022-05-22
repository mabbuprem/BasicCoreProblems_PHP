
<?php
// write a Program to Find the Largest Among Three Numbers
echo "find Largest Among Three Numbers \n";
$x = 100;
$y = 50;
$z = 25;
function largest($x, $y, $z) {
  $max = $x;

  if ($x >= $y && $x >= $z)
    $max = $x;
  elseif ($y >= $x && $y >= $z)
    $max = $y;
  else 
    $max = $z;
  
  echo "Largest number among $x, $y and $z is: $max\n";
}

largest($x, $y, $z);
largest(50, 50, 25);
?>