<html>
<head>
 <title></title>
</head>
<body>
<h1>Bucle While 2</h1>
<form action="21.php" method="post">
¿Cuantas veces?
<input type="text" name="number">
<input type="submit" value="Enviar">
</form>
<p>
<?php
 /* Mostraremos el uso de la sentencia While y comenzamos a usar entrada
 del teclado mediante un formulario simple */
if ( isset( $_POST['number'] )) {
 $number = $_POST['number'];
 $counter = 1;
 while ($counter <= $number) {
 echo "<b>$counter</b>.- Los bucles son faciles!<br>\n";
 $counter++;
 }
 echo "Se acabo.\n";
}
?>
</p>
</body>
</html><!-- P R E G U N T A S¿Cuál es la diferencia con el script anterior?--SOLO SE USO UN FORMATO, PHP PARA CREAR LA INTERACCION.-->