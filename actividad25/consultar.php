<?php

require ("db.php");
$consulta="select * from solucion";

$resultado=$conn->query($consulta);
while($row=$resultado->fetch()){
    echo($row["nombre"]);
    echo("<br>");
    echo($row["precio"]);
}
