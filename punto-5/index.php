<?php

const TICKET = 25000;
$afiliacion = "";
$people = 0;

echo "Proporciona el tipo de afiliación: ";
$afiliacion = strtolower(readline());

echo "Proporcina la cantidad de personas: ";
$people = readline();

if ($afiliacion == "a" || $afiliacion == "b") {
  $off = (TICKET * $people) * 0.3;
  echo "El descuesto es de: $", number_format($off);
  $totalpay = (TICKET * $people) - $off;
} else {
   $totalpay = (TICKET * $people);
   echo "No cuentas con una membrecia asi que no tienes descuento. ";
}

echo "\nValor total a pagar es de: $", number_format($totalpay);
