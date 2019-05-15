<?php
$user = "admin";
$pass = 123;

echo '<br>';
echo '<br>';
echo '<br>';

// EJERCICIO 8
$numero = 444444;
$esPar = "";
$esPar = ($numero % 2 == 0) ? $esPar = "el número es par" : $esPar = "el número es impar";
echo $esPar;

echo '<br>';
echo '<br>';
echo '<br>';

// EJERCICIO 9 y 10
$nota = 6;
switch ($nota) {
  case 0;
    echo "El número no es válido.";
    break;
  case 1;
  case 2;
  case 3;
    echo "desaprobado";
    break;
  case 4;
  case 5;
    echo "zafamos";
    break;
  case 6;
  case 7;
  case 8;
    echo "Bienn!!!";
    break;
  case 9:
    echo "MUY bien!!";
    break;
  case 10:
    echo "Excelente!!!!!";
    break;
  default:
    echo "El número no es válido.";

}

echo '<br>';
echo '<br>';
echo '<br>';

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <input type="text" name="user" value="" placeholder="user">
    <br>
    <input type="password" name="pass" value="" placeholder="password">
  </body>
</html>
