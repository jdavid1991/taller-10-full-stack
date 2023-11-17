<?php

do {
  echo "Seleccione la operacion (1-4) a realizar: \n";
  echo "1. Suma \n";
  echo "2. Resta \n";
  echo "3. Multiplicación \n";
  echo "4. División \n";
  $operacion = readline();

  echo "Proporcina el primer numero: ";
  $numero1 = floatval(readline());
  echo "Proporcina el segundo numero: ";
  $numero2 = floatval(readline());

  switch ($operacion) {
    case "1":
      $resultado = $numero1 + $numero2;
      break;
    case "2":
      $resultado = $numero1 - $numero2;
      break;
    case "3":
      $resultado = $numero1 * $numero2;
      break;
    case "4":
      if($numero2 == 0){
        echo "No es posible dividir en 0 \n";
      }else{
        $resultado = $numero1 / $numero2;
      }
      break;
    default:
      echo "Operación no válida. \n";
  }
} while (empty($operacion && $numero1 && $numero2));


echo "El resultado es: " . $resultado;
