<html>
<head>
 <title>Ejemplo de Practica </title>
</head>
<body>
<h1>Ejemplo de valoracion de aprendizaje en PHP</h1>
<?php
$nombre = "Ariel";
$materia1 = "Programacion";
$materia2 = " Web";
$profesor = "Oscar Grimaldo A.";
$a = 8.1;
$b = 1.8;
$c = 6.2;
$palabras = array( "carro", "lunes", "compre", "un", "el", "equipado");


echo "hola soy <b>" . $nombre . "</b> estoy probando la programacion en PHP ", "<br>";
echo "para la materia <b>" .$materia1.$materia2. "</b> con el profosor <b>".$profesor."</b>", "<br>";
echo "","<br>";
echo "Con el siguiente arreglo PALABRAS, conforme una oracion: ","<br>";
echo "<b>".$palabras[0]."","<br>";
echo "".$palabras[1]."","<br>";
echo "".$palabras[2]."","<br>";
echo "".$palabras[3]."","<br>";
echo "".$palabras[4]."","<br>";
echo "".$palabras[5]."</b>","<br>";
echo "la oracion es: ".$palabras[4]." ".$palabras[1]." ".$palabras[2]." ".$palabras[3]." ".$palabras[0]." ".$palabras[5];
echo "","<br>";

echo "","<br>";
echo "Tenemos como variables A=".$a." B=".$b." C=".$c, "<br>";
echo "la suma de los numeros A&B=" .($a + $b), "<br>";
echo "la resta de los numeros A&B=" .($a - $b), "<br>";
echo "la division de los numeros C&A= " .($c / $a), "<br>";
echo "la multiplicacion de los numeros C&A= " .($c * $a), "<br>";

echo "","<br>";
echo "& |","<br>";
$d = $b+$c;
echo ($a == $d) && ($c > $b), "<br>";
echo ($a == $d) || ($c > $b), "<br>";

?>
</body>
</html>
<!-- P R E G U N T A S

-->
