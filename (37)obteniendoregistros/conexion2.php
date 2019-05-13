<?php

require("archivos.php");
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

if(mysqli_connect_errno()){

    echo "Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
mysqli_set_charset($conexion, "utf8");//reconoce caraceres especiales

$consulta="select * from datospersonales";
//$consulta="select * from datospersonales where nombre='angela'";

$resultado=mysqli_query($conexion,$consulta);
// print_r($resultado);
while($fila=mysqli_fetch_assoc($resultado)){
    echo "<table><tr><td>";
    echo $fila['NOMBRE'] . "</td><td>";
    echo $fila['APELLIDO'] . "</td><td>";
    echo $fila['EDAD'] . "</td><td></tr></table>";
    echo "<br>";
}



?>