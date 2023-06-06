<?php
//https://www.php.net/manual/en/language.functions.php

function saludar($nombre){ //user-definition function
    //return echo("<p>Hola, qué tal</p>");
    return "hola, qué tal ".$nombre;
}

//saludar();
echo(saludar("juan")); //llamada a la función 

echo("<hr>");
//funciones con argumentos predeterminados

function viajar($destino="roma"){
    return "Nos vamos de viaje a ".$destino;
}
$saludo="hola";
echo(viajar()); //no genera error porque el argumento de func es predeterminado
//echo("<p>".viajar("lisboa")."</p>");
echo("<p>viajar('lisboa')</p>");
echo("<p>$saludo</p>");

//funciones variables
echo("<hr>");
function calcular(){
    return 2+2;
}

$c="calcular"; //variable function

echo($c());

//funciones anónimas
echo("<hr>");
$mensaje="En un lugar de la mancha";
/*
$salida=function($mensaje){ //función anónima
    var_dump($mensaje);
};
*/

//función flecha. arrow function 
//más simplificada de una función anónima (closure)
$salida=fn($mensaje)=>var_dump($mensaje);


//llamar a un función anónima
//$salida;
$salida($mensaje);
