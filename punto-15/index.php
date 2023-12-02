<?php

include "./operationUtils.php";

$num1 = 0;
$num2 = 0;
$option = "";

$num1 = getNumber();
$num2 = getNumber();
$option = showMenu();
$resutl = operate($num1, $num2, $option);

echo "El resultado de la operación es : " . $resutl;





