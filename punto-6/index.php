<?php

$fullName = "";
$age = 0;

echo "Proporciona tu nombre: ";
$fullName = strtolower(readline());

echo "Proporciona tu edad: ";
$age = readline();

if($age >= 18){
  echo "Bienvenid@ " . ucwords($fullName) . " tu edad es: " . $age . " años eres mayor de edad";
}else{
  echo "Bienvenid@ " . ucwords($fullName) . " tu edad es: " . $age . " años eres menor de edad";
}

