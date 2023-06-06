<?php
//funciones definidas por el usuario
function saludar($nombre){//función que le pasas un argumento
    return "hola, qué tal, ".$nombre;
}

echo(saludar("juan"));

//funciones definidas en PHP
$mensaje="En un lugar de la mancha";
echo(strtoupper($mensaje));
echo(str_replace("a","e",$mensaje));

//tienes una variable numérica entera.
//tienes una variable numérica con decimales
//divides la primera por la segunda.
//muestra el resultado. 
//muestra el resultado redondeado a dos decimales
//muestra el resto de la división
$entero=145;
$decimal=7.9;
$division=$entero/$decimal;
echo($division);
echo("<hr>");
echo(round($division,2));
echo("<hr>");
echo($entero%$decimal);
echo("<hr>");
//muestra con un bucle los números pares que hay del 0 al 20 incluidos
for($i=0;$i<=20;$i+=2){
    echo("<p>".$i."</p>");
}
echo("<hr>");
//si el número es 14, dejas de mostrar los datos
for($i=0;$i<=20;$i+=2){
    
    echo("<p>".$i."</p>");
    if($i==14)
        break;//sale del bucle
}
echo("<hr>");
//si el número es 14, NO muestras el 14, pero sigues
for($i=0;$i<=20;$i+=2){
    if($i==14)
        continue;//saltas este paso pero sigues en el bucle
    echo("<p>".$i."</p>");
}
echo("<hr>");
//reto. utiliza una función para sacar un número aleatorio entre el 0 y el 10
echo(rand(0,10));


