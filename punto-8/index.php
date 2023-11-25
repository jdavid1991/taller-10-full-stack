<?php

const TICKET = 25000;
$afiliacion = "";
$people = 0;
$off = 0;

echo "Proporciona el tipo de afiliación: ";
$afiliacion = strtolower(readline());

echo "Proporciona el número de personas: ";
$people = readline();

$totalPay = TICKET * $people;

switch ($afiliacion) {
  case "a":
    $off = $totalPay * 0.3;
    break;
  case "b":
    $off = $totalPay * 0.25;
    break;
  case "c":
    $off = $totalPay * 0.1;
    break;
  case "d":
    $off = $totalPay * 0.05;
    break;
  default:
    echo "No tienes ninguna afiliación. El total a pagar es: $" . number_format($totalPay);
    break;
}

$totalPay -= $off;

if($afiliacion == "a" || $afiliacion == "b" || $afiliacion == "c" || $afiliacion == "d"){
  echo "El valor a pagar con descuento es de: $" . number_format($totalPay);
}
