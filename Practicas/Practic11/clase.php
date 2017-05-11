<?php
//mvc, modelo:controla DB, funciones, DB en modo php, se añaden funciones determinadas
//    controlador: actua como intermediario entre modelo y vista, se encarga de hacer todo, requisiciones entre estas dos elementos
//    vista: lo que ve el user, plantillas para agilizar el tiempo y no repetir un patron
$txt = "Hello world!";
$x = 5;
$y = 10.5;
$suma= $x+$y;


for ($i=0; $i <10 ; $i++) {
 $arreglo[$i]=$i;
 //echo "valor: ".$arreglo[$i]."<br>";
}


function suma (){
  global $suma;
 echo "la suma es:".$suma;
}
//suma();


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>s</title>
  </head>
  <body>
    <ul>
      <?php
      for ($i=0; $i <10 ; $i++) {
        echo "<li> $arreglo[$i]</li>";
      }?>
    </ul>
  </body>
</html>
