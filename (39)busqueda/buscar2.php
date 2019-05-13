<style>
table{
    width:50%;
    border:1px dotted #FF0000;
    margin:auto;
}
</style>
<?php

$db_host="localhost";
$db_usu="root";
$db_con="";
$nombre="angela";
$conexion=mysqli_connect($db_host,$db_usu,$db_con,$nombre);

if($conexion){
    echo "conect";
}

//$consulta="select * from usuario WHERE ID=1";
$consulta="select * from usuario WHERE NOMBRE LIKE 'a%' ";
$resultado=mysqli_query($conexion,$consulta);
//resulset o recorset es una tabla virtual en este csao esta almacenada en la tabla resultado
    //mysqlli_fetch_row ve linea a linea la informacion que hay en la tabla virtual
    
    //$fila es un array     
    //while(($fila=mysqli_fetch_row($resultado))==true)
while ($fila=mysqli_fetch_assoc($resultado)){
echo "<table><tr><td>";
echo $fila['ID'] . "</td><td>";
echo $fila['NOMBRE'] . "</td><td>";
echo $fila['CORREO'] . "</td></tr></table>";
echo '<br>';
}

mysqli_close($conexion);
?>