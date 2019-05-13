<?php

require ("datos_conexion.php");

$conexion=mysqli_connect($db_host,$db_usu,$db_con);

$usuario =mysqli_real_escape_string($conexion, $_GET["usu"]);
$contra  =mysqli_real_escape_string($conexion, $_GET["con"]);

if(mysqli_connect_errno()){
    echo "fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion,$nombre) or die ("No se encuentra la BBDD");
mysqli_set_charset($conexion, "utf8");

$consulta="delete from usuarios where usuario = '$usuario' and contra ='$contra'";

echo "$consulta<br><br>";
/*
if(mysqli_query($conexion, $consulta)){
    echo "Baja procesada";
}*/
//ejecuta la consulta
//mysqli_num_rows() esta funcion es devolvernos una consulta de tipo select si hay registros o no
//mysqli_affected_rows()
mysqli_query($conexion, $consulta);

if(mysqli_affected_rows($conexion)>0){
    echo "Baja procesada";
}else{
    echo "no se ha encontrado usuario";
}
mysqli_close($conexion);

?>