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


$consulta="select * from usuario";
$resultado=mysqli_query($conexion,$consulta);
//resulset o recorset es una tabla virtual en este csao esta almacenada en la tabla resultado
    //mysqlli_fetch_row ve linea a linea la informacion que hay en la tabla virtual
    
    //$fila es un array     
    //while(($fila=mysqli_fetch_row($resultado))==true)
while ($fila=mysqli_fetch_row($resultado)){
echo "<table><tr><td>";
echo $fila[0] . "</td><td>";
echo $fila[1] . "</td><td>";
echo $fila[2] . "</td></tr></table>";
echo '<br>';
}

mysqli_close($conexion);
?>