<?php
$ciudades=["madrid",15,True,14.58,"sevilla",'juan'];
echo($ciudades);
print($ciudades);
print_r($ciudades);
var_dump($ciudades);

echo("<hr>");
foreach($ciudades as $ciudad){
    echo("<p>".$ciudad."</p>");
}

echo("<hr>");
$ciudades[10]="nuevo elemento";//añadir nuevo elemento al array
var_dump($ciudades);
echo("<hr>");
//eliminar un elemento existente del array
unset($ciudades[3]);
var_dump($ciudades);