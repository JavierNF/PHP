<?php

$ciudades=array("madrid","sevilla","valencia");

$clientes=["indra","telefónica","repsol"]; //declaración de array abreviado

echo("<p>".$ciudades[0]."</p>");

$temperaturas=[
    "lunes"=>15.95,
    "martes"=>9.95,
    3=>4.58,
    "miércoles"=>TRUE,
];
echo("<p>".$temperaturas["martes"]."</p>");

echo("<hr>");

for($i=0;$i<=10;$i++){
    echo("<p>".$i."</p>");
}

foreach($ciudades as $ciudad){
echo("<p>$ciudad</p>");
};

