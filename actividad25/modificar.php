<html>
<body>

<form>
    <p>Dime tu nombre<input type="text" name="nombre"></p>
    <input type="submit" value="consultar">
</form>


<?php
require ("db.php");
$consulta="select * from solucion where nombre=:nombre";
if(isset($_GET['nombre'])){
    $nombre=$_GET['nombre'];
    $resultado=$conn->prepare($consulta);
//$datos=$resultado->execute([$_GET["nombre"]]);
    $resultado->bindParam(':nombre',$nombre);
    $resultado->execute();
    while($row=$resultado->fetch()){
        echo($row["id"]);
        $_SESSION['id']=$row["id"];
        echo("<br>");
        echo($row["nombre"]);
        echo("<br>");
        echo($row["precio"]);
    }
}//cierra if


?>
</body>
</html>
