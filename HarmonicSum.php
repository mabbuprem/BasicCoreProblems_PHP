<?php
$n = readLine("enter the limit");
$sum = 0;
for($i = 1 ; $i <= $n; $i++);{
    $sum = $sum + (1/$i);
}
$sum = round($sum , 2);
echo "Harmonic sum upto your limit is:", $sum;
?>