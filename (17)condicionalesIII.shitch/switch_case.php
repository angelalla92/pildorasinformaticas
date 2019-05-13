<?php

    if(isset($_POST["enviando"])){

        $contra=$_POST["contraseña_usuario"];
        $nombre=$_POST["nombre_usuario"];
        

       switch (true){
           case $nombre=="Juan" && $contra=="1234":
                echo "Usuario autorizado. Hola Juan";
                break;
            case $nombre=="Maria" && $contra=="5555":
                echo "Usuario autorizado. Hola Maria";
                break;

            case $nombre=="Pedro" && $contra=="1111":
                echo "Usuario autorizado. Hola Pedro";
                break;
            default:
                echo "Usuario no autorizado";
       }

       /*
    if($edad<=18){

        echo "Eres menor de edad";

    }else if($edad<=40){
        echo "Eres joven";

    }else if($edad<=65){

        echo "Eres maduro";

    }else{
        echo "Cu&iacute;date";
    }*/
    }
           
    
/*
*que son los bucles y para que sirven.-
son estructuras repetitivas, repiten el codigo.

*blucles indeterminados.- son aquellos que no sabemos cuantas vece srepetiran el 
codigo.
*while,(mientras)
*do-while,

*bucles determinados.- son bucles que sabemos cuantas veces repetiran el codigo 
*for
*/

?>