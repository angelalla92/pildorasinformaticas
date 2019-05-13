<?php
$usuario =$_GET["usu"];
$contra =$_GET["con"];

require ("datos_conexion.php");

$conexion=mysqli_connect($db_host,$db_usu,$db_con);
if(mysqli_connect_errno()){
    echo "fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion,$nombre) or die ("No se encuentra la BBDD");
mysqli_set_charset($conexion, "utf8");

$consulta="select * from usuarios where usuario = '$usuario' and contra ='$contra'";

echo "$consulta<br><br>";

$resultado=mysqli_query($conexion, $consulta);

while ($fila=mysqli_fetch_assoc($resultado))
    {
    echo "Bienvenido ". $usuario ." <br> Estos son tus datos: <br>";
    echo "<table><tr><td>";

    echo $fila['usuario'] . "</td><td>";
    echo $fila['contra'] . "</td><td>";
    echo $fila['tfno'] . "</td><td>";
    echo $fila['direccion'] . "</td><td></tr></table>";
}

mysqli_close($conexion);
?>