<?php

$num = 0;

echo "Digite un numero a multiplicar: ";
$num = readline();

for ($i = 0; $i <= 30; $i++) {
  $result = $num * $i . "\n";
  echo $num . " x " . $i . " = " . $result;
}
