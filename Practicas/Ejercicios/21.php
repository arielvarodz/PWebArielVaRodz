<html>
<head>
 <title>Bucle While</title>
</head>
<body>
<h1>Bucle While</h1>
<?php
 /* Mostraremos el uso de la sentencia While y comenzamos a usar entrada
 del teclado mediante un formulario simple */
if ( isset( $_POST['number'] )) {
 $number = $_POST['number'];
 $counter = 1;
 while ($counter <= $number) {
 echo "Los bucles son faciles!<br>\n";
 $counter++;
 }
 echo "Se acabo.\n";
}
?>
</p>
</body>
</html>
?>
</p>
</body>
</html>

<!-- P R E G U N T A S
¿Por qué tenemos dos archivos en este ejercicio, uno php y el otro html?
-- PORQUE SE REQUIERE INTERACTUAR, ES DECIR HTML RECIBE LOS DATOS DEL USER & PHP LOS PROCESA Y ENVIA EL RESULTADO
¿Qué es un formulario?
-- UNA "HOJA" DE INTERACCION PARA EL SISTEMA Y EL USUARIO
Exlica el ciclo While
-- EJECUTA LAS INSTRUCCIONES MIENTRAS LA CONDICION SEA VERDADERA, EN ESTE CASO DE 0-NUMERO DADO POR EL USUARIO
Que hace $Counter++
-- ES LA VARIABLE DONDE SE ALMACENA EL NUMERO DE VECES, CUENTA HASTA QUE TERMINE EL CICLO
-->
