<?php

$num1 = 0;
$num2 = 0;

echo "Digite el número de la operación que desea realizar\n";
echo "\n[1]- Suma";
echo "\n[2]- Resta";
echo "\n[3]- Multiplicación";
echo "\n[4]- División\n";
$operacion = readline();

if ($operacion <= 4) {
  echo "Digite el primer numero: ";
  $num1 = readline();

  echo "Digite el segundo numero: ";
  $num2 = readline();
} else {
  echo "La operación ingresada no existe";
}

switch ($operacion) {
  case 1:
    $result = $num1 + $num2;
    echo "El resultado de la suma es: " . $result;
    break;
  case 2:
    $result = $num1 - $num2;
    echo "El resultado de la resta es: " . $result;
    break;
  case 3:
    $result = $num1 * $num2;
    echo "El resultado de la multiplicación es: " . $result;
    break;
  case 4:
    if ($num2 == 0) {
      echo "Error!";
    } else {
      $result = $num1 / $num2;
      echo "El resultado de la división es: " . $result;
    }
    break;
}
