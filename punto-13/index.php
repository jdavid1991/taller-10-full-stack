<?php

$sum = 0;
$arreglo = array(100, 500, 40, 90, 6);

foreach($arreglo as $num){
  $sum += $num;
}
print_r($arreglo);
echo "El total de la suma del arreglo es: ", $sum;
