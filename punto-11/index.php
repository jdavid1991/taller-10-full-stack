<?php

$sum = 0;

for ($i = 1; $i <= 100; $i += 2) {
  echo $i . "\n";
  $sum += $i;
}
echo "Total de la suma es: " . $sum;
