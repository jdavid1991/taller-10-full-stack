<?php

function hasSecurityLong($pass)
{
  return strlen($pass) >= 8;
}

function hasUpperLetter($pass)
{
  $array = str_split($pass);
  
  foreach($array as $letter){
    if($letter == strtoupper($letter)){
      return true;
    }
  }
}

function hasNumber($pass)
{
  $array = str_split($pass);

  foreach($array as $num){
    if(is_numeric($num)){
      return true;
    }
  }
  
}


// return preg_match('/[0-9]/', $pass);