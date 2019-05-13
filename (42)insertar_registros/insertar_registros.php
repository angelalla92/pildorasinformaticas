<?php
    
    $db_host="localhost";
    $db_usu="root";
    $db_con="";
    $nombre="angela";
    $conexion=mysqli_connect($db_host,$db_usu,$db_con,$nombre);
    
    $consulta="INSERT INTO USUARIO VALUES('','KELLY','@KELY','159')";
    $resultado=mysqli_query($conexion,$consulta);
    
    mysqli_close($conexion);
    ?>
    
