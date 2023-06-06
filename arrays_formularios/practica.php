<?php
$unidades=$_POST["unidades"];
if($unidades<10){
    echo("<p>unidades insuficientes</p>");
}
else{
    echo("<p>unidades guardadas</p>");
}

