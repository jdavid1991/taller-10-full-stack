<?php

function getNumber()
{
  echo "Ingrese un numero para operar: ";
  return readline();
}

function showMenu()
{
  echo "Digite la opción de operación siendo: \n";
  echo "1-> Suma \n";
  echo "2-> Resta \n";
  echo "3-> Multiplicación \n";
  echo "4-> División \n";
  
  return readline();
}

function operate($x, $y, $option)
{
  switch($option){
    case 1:
      return add($x, $y);
    case 2:
      return sub($x, $y);
    case 3:
      return dot($x, $y);
    case 4:
      return div($x, $y);
    default:
      echo "Opcion no valida";
      return 0;  
  }
}

function add($x, $y)
{ 
  return  $x + $y;
}
function sub($x, $y)
{
  return $x - $y;
}
function dot($x, $y)
{
  return $x * $y;
}
function div($x, $y)
{
  return $x / $y;
}
