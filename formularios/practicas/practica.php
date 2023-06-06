<?php

//En un array guarda las temperaturas con decimales de cada día 
//de la semana
//Muestra las temperaturas en pantalla
// *reto : muestra la media de temperatura
$temperaturas=[//declarar array en modo abreviado
    "lunes"=>15.5,
    "martes"=>8.95,
    "miércoles"=>14.5,
    "jueves"=>12.14,
    "viernes"=>11.32
];
var_dump($temperaturas);
foreach($temperaturas as $dia=>$temperatura){//recorres key-value del array
    echo("<p>".$dia."</p>");
    echo("<p>".$dia."-".$temperatura."</p>");
}

echo("<p>".(array_sum($temperaturas)/count($temperaturas))."</p>");
// https://www.php.net/manual/es/funcref.php

//las unidades son 150
//el precio es 9.95
//muestra el total redondeado a dos decimales
$unidades=153;
$precio=9.95;
$total=round($unidades*$precio,2);
echo("<p>El total es ".$total."</p>");

//en un array tienes tres clientes con sus ventas
//muestra el listado de clientes con sus ventas y su iva incluido (21%)
//si la venta es superior a 1000, tiene un descuento antes de iva del 5%
echo("<hr>");
$clientes=[
    "telefonica"=>1500,
    "indra"=>895,
    "repsol"=>1785.95,
];
var_dump($clientes);
foreach($clientes as $cliente=>$facturacion){
    if($facturacion>1000){
        echo("<p>Cliente ".$cliente." facturacion ".$facturacion." iva incluido ".($facturacion*0.95*1.21)."</p>");
    }
    else{
    echo("<p>Cliente ".$cliente." facturacion ".$facturacion." iva incluido ".($facturacion*1.21)."</p>");
    }//cierra else
}//cierra foreach


//crea un formulario en html con los campos para introducir
//tu correo, tu contraseña y la ciudad a elegir de una lista de 4
//al enviar datos
//si la contraseña es 123
//te muestra la ciudad elegida y el mensaje que está disponible
//si no es la contraseña 123 te dice que la ciudad no está disponible