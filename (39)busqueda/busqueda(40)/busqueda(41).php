<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table{
        width:50%;
        border:1px dotted #FF0000;
        margin:auto;
    }
    </style>
<?php
function ejecuta_consulta($labusqueda){
    
    $db_host="localhost";
    $db_usu="root";
    $db_con="";
    $nombre="angela";
    $conexion=mysqli_connect($db_host,$db_usu,$db_con,$nombre);

    if($conexion){
        echo "conect";
    }    
    $consulta="select * from usuario WHERE NOMBRE like '$labusqueda%' ";
    $resultado=mysqli_query($conexion,$consulta);
    
    while ($fila=mysqli_fetch_assoc($resultado)){
    echo "<table><tr><td>";
    echo $fila['ID'] . "</td><td>";
    echo $fila['NOMBRE'] . "</td><td>";
    echo $fila['CORREO'] . "</td></tr></table>";
    echo '<br>';
    }

    mysqli_close($conexion);
}
    ?>
    
</head>
<body>
<?php
    $mibusqueda=$_GET["busquita"];
    $mipagina=$_SERVER["PHP_SELF"];
    if($mibusqueda!=NULL){
        ejecuta_consulta($mibusqueda);
    }else{
        echo("<form action='" . $mipagina . "' method='get'>
        <label>Buscar:<input type='text' name='busquita'></label>
        <input type='submit' name='enviando' value='Dale!'>
        
        </form>");
        //butmit recarga la pagina
    }

?>
    
</body>
</html>