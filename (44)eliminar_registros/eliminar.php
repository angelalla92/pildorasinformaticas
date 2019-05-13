<?php

    $cod=$_GET["c_art"];
    $sec=$_GET["seccion"];
    $nom=$_GET["n_art"];
    $pre=$_GET["precio"];
    $fec=$_GET["fecha"];
    $imp=$_GET["importado"];
    $port=$_GET["p_orig"];
    
    $db_host="localhost";
    $db_usu="root";
    $db_con="123456";
    $nombre="angela";
    $conexion=mysqli_connect($db_host,$db_usu,$db_con,$nombre);
    
    $consulta="delete from produc where id='$cod'";
    $resultado=mysqli_query($conexion,$consulta);
    
    if($resultado==false){
        echo "Error en la consulta";
    }else{
        //echo "Regsitro eliminado<br>";
        //echo mysqli_affected_rows($conexion);
        if (mysqli_affected_rows($conexion)==0){
            echo "no hay registros que eliminar con este criterio";
        }else{
            echo "se han elñiminaado " . mysqli_affected_rows($conexion) . " registros";
        }
    }
    mysqli_close($conexion);
?>
    