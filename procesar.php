<?php
  if (!empty($_POST['username'])&& !empty($_POST['password'])) {
    $password = $_POST['password'];
    echo "Contraseña original: ".$password;

    echo ("<br>");
    $encriptacionSHA1 = sha1($password);
    echo "Contraseña encriptada: ".$encriptacionSHA1;
  }
  else {
    echo "Los datos estan vacios";
  }


 ?>
