  <?php

  include "./passwordCheak.php";

  $user = "";
  $password = "";

  echo "Digite su usuario a registrar \n";
  $password = readline();

  echo "Digite una contraseña \n";
  $password = readline();

  if (hasSecurityLong($password) && hasUpperLetter($password) && hasNumber($password)) 
  {
    echo "Contraseña segura";
  } else {
    echo "Contraseña no cumple con los parametros";
  }
