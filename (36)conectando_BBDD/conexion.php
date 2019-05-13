<?php
/*
$db_host="localhost";
$db_nombre="prueba";
$db_usuario="root";
$db_contra="";
*/

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

/*
$fila=mysqli_fetch_row($resultado);//ejecuta una linea de codigo cada la ves que
//la llamas ejecuta una linea de codigo, la primera ves que la llamas accede al primer registro
//si la llamas una segunda vez accedera al segundo registro etc.

echo $fila[0];
echo $fila[1];
echo $fila[2];
echo $fila[3];
echo "<br>";
//manejo de errores con la conexion a la BBDD
//recorrer el array de los resultados con bucle 

$fila=mysqli_fetch_row($resultado);
echo $fila[0];
echo $fila[1];
echo $fila[2];
echo $fila[3];
echo "<br>";

echo "<hr>";


$registros=1;
while($registros<=2){

    $fila=mysqli_fetch_row($resultado);

    echo $fila[0];
    echo $fila[1];
    echo $fila[2];
    echo $fila[3];
    echo "<br>";
    $registros++;
}
echo "<hr>";

while(($fila=mysqli_fetch_row($resultado))==true){
    echo $fila[0];
    echo $fila[1];
    echo $fila[2];
    echo $fila[3];
    echo "<br>";
}
*/
//cuando en una condicion boleana la evaluas sin el true se toma por defecto como true
/*while($fila=mysqli_fetch_row($resultado)){
    echo $fila[0];
    echo $fila[1];
    echo $fila[2];
    echo $fila[3];
    echo "<br>";
}

mysqli_close($conexion);

/**
 * compartir datos de conexion a bbdd.
 * importar tablas a bbdd mysql.
 * consultas sql con filtros o criterios.
 

 */
while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
    
    echo $fila['NOMBRE'];
    echo $fila['APELLIDO'];
    echo $fila['EDAD'];
    echo "<br>";
}

mysqli_close($conexion);

?>