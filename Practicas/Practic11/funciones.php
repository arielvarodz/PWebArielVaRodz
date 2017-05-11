<?php

class validar {
function verificar_texto()
{
  $txt = " HERSRR asdsa asd asd asd asd";
  echo "Texto; " .$txt."<br>";
   if (preg_match("/^[a-z-\s]{3,}$/i",  $txt))
     echo "Aceptado"."<br>";
   else
     echo "Denegado"."<br>";
}

function verificar_numero()
  {
  $num = "333";
  echo "Numero; " .$num."<br>";
   if (preg_match("/^[0-9]{1,}$/i",  $num))
     echo "Aceptado"."<br>";
   else
     echo "Denegado"."<br>";
   }
}
$validar=new validar;
$validar -> verificar_texto();
$validar -> verificar_numero();

?>
