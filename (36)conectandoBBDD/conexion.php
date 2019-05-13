<?php 
    require("datos_conexion.php");
         
    $conexion = mysqli_connect($db_host,$db_usuario,$db_conra,$db_nombre);
    if($conexion){
        echo "conecto";
    }
    $consulta="select * from usuario";
    $resultado=mysqli_query($conexion, $consulta);
    
    $fila=mysqli_fetch_row($resultado);
    echo $fila[0];
    
    
?>