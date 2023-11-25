<?php

$num = 0;
$i = 1;

echo "Ingrese el numero a multiplicar: ";
$num = readline();

while( $i <= 30){
  $multi = $num * $i;
  echo $num . " x " . $i . " = " . $multi . "\n";
  $i++;
}