<?php
$mail=$_POST["correo"];
$contraseña=$_POST["contraseña"];
$ciudad=$_POST["ciudad"];
var_dump($mail);
echo("<hr>");
var_dump($contraseña);
echo("<hr>");
var_dump($ciudad);
echo("<hr>");
if($contraseña=="123"){//operador de comparación
    echo("<p>La ciudad elegida es ".$ciudad."</p>");
}
else{
    echo("<p>NO puedes ir a ningún sitio</p>");
}