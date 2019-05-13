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
    
    $consulta="INSERT INTO produc VALUES ('$cod','$sec','$nom','$pre','$fec','$imp','$port')";
    $resultado=mysqli_query($conexion,$consulta);
    
    if($resultado==false){
        echo "Error en la consulta";
    }else{
        echo "Regsitro guardado<br><br>";
        echo "<table><tr><td>$cod</td></tr>";
        echo "<tr><td>$sec</td></tr>";
        echo "<tr><td>$nom</td></tr>";
        echo "<tr><td>$pre</td></tr>";
        echo "<tr><td>$fec</td></tr>";
        echo "<tr><td>$imp</td></tr>";
        echo "<tr><td>$port</td></tr></table>";
    }
    mysqli_close($conexion);
?>
    