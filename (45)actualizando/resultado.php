<style>
table{
    width:50%;
    border:1px dotted #FF0000;
    margin:auto;
}
</style>
<?php
$busqueda=$_GET["busquita"];

$db_host="localhost";
$db_usu="root";
$db_con="";
$nombre="angela";
$conexion=mysqli_connect($db_host,$db_usu,$db_con,$nombre);

if($conexion){
    echo "conect";
}

//$consulta="select * from usuario WHERE ID=1";
//$consulta="select * from usuario WHERE NOMBRE = '$busqueda' ";
$consulta="select * from produc WHERE c_art like '$busqueda%' ";
$resultado=mysqli_query($conexion,$consulta);
//resulset o recorset es una tabla virtual en este csao esta almacenada en la tabla resultado
    //mysqlli_fetch_row ve linea a linea la informacion que hay en la tabla virtual
    
    //$fila es un array     
    //while(($fila=mysqli_fetch_row($resultado))==true)
while ($fila=mysqli_fetch_assoc($resultado)){

echo "<form action='actualizar.php' method='get'>";
echo "<input type='text' name='c_art' value='" . $fila['c_art'] . "'><BR>";
echo "<input type='text' name='seccion' value='" . $fila['seccion'] . "'><BR>";
echo "<input type='text' name='n_art' value='" . $fila['n_art'] . "'><br>";
echo "<input type='text' name='precio' value='" . $fila['precio'] . "'><br>";
echo "<input type='text' name='fecha' value='" . $fila['fecha'] . "'><BR>";
echo "<input type='text' name='importado' value='" . $fila['importado'] . "'><BR>";
echo "<input type='text' name='p_orig' value='" . $fila['p_orig'] . "'><BR>";
echo "<input type='submit' name='enviando' value='Actualizar!'>";
echo "</form>";
}

mysqli_close($conexion);


/*
echo "<table><tr><td>";
echo $fila['ID'] . "</td><td>";
echo $fila['SECCION'] . "</td><td>";
echo $fila['NOMBRE'] . "</td><td>";
echo $fila['PRECIO'] . "</td><td>";
echo $fila['FECHA'] . "</td><td>";
echo $fila['IMPORTADO'] . "</td><td>";
echo $fila['PAIS'] . "</td><td>";
echo "</table></tr></td>";
echo '<br>';
*/
?>