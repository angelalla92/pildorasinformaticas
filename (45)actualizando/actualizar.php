<?php

    $cod=$_GET["c_art"];
    $sec=$_GET["seccion"];
    $nom=$_GET["n_art"];
    $pre=$_GET["precio"];
    $fec=$_GET["fecha"];
    $imp=$_GET["importado"];
    $por=$_GET["p_orig"];
    
    $db_host="localhost";
    $db_usu="root";
    $db_con="";
    $nombre="angela";
    $conexion=mysqli_connect($db_host,$db_usu,$db_con,$nombre);
    
    $consulta="UPDATE produc SET c_art='$cod', seccion='$sec', n_art='$nom', precio='$pre', fecha='$fec', importado='$imp', p_orig='$por' WHERE c_art='$cod'";
    $resultado=mysqli_query($conexion,$consulta);
    
    if($resultado==false){
        echo mysqli_error($conexion);
    }else{
        echo "Regsitro guardado<br><br>";
        echo "<table><tr><td>$cod</td></tr>";
        echo "<tr><td>$sec</td></tr>";
        echo "<tr><td>$nom</td></tr>";
        echo "<tr><td>$pre</td></tr>";
        echo "<tr><td>$fec</td></tr>";
        echo "<tr><td>$imp</td></tr>";
        echo "<tr><td>$por</td></tr></table>";
    }
    mysqli_close($conexion);
?>
    