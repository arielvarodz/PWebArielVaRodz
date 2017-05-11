<html>
<head>
 <title>Tabla condicional</title>
</head>
<body>
<h1>Tabla condicional 1</h1>
<?php
function muestra($valor) {
if ($valor < 0.5)
$color = "red";
else
$color = "blue";
echo "<td><font color='$color'>$valor</font></td>\n";
}
?>
<table border="1">
<?
for ($x=0; $x<=2; $x+=0.01){
echo "<tr>";
muestra($x);
muestra(sin($x));
muestra(cos($x));
echo "</tr>";
}
?>
</body>
</html> 
<!-- P R E G U N T A S
Explica que es lo que hace el script
--UTILIZANDO LAS FUNCIONES SENO Y COSENO CREA UNA TABLA DE VALORES
CON UN CICLO FOR DE 0-2 Y MUESTRA LOS VALROES CON LA ETIQUETA TR
-->
