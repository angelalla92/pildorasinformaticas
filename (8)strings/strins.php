<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style>
        .resaltar{
            color:#F00;
            font-weit:bold;
        }
    </style>
</head>
<body>
<?php
/*no puedes poner comillas dobles dentro de comillas dobles
o vicebersa o tambien se puede usar el uso de la barra invertida para escapar el caracter
con esto le dices al lenguaje de php que el caracter que va a continuacion de la barra invertida no forma parte del string
*/
    echo "<p class='resaltar'> Esto es un ejemplo de frase</p>";
    echo '<p class="resaltar"> Esto es un ejemplo de frase</p>';
    echo "<p class=\"resaltar\"> Esto es un ejemplo de frase</p>";
    
    $nombre="juan";

    echo 'hola $nombre';

    echo "hola $nombre";
    //comprar cadenas de caracters
    //strcmp; strcmp compara valores de tipo string 
    //teniendo encuenta si estas companrando mayusculas y minusculas

    //strcasecmp; compara valores de tipo string ignorado si estan en minuscuila y mayuscula
    //devuelve 1 si es ture y 0 si es false.
    $variable1="casa";
    $variable2="CASA";

    $resultado=strcmp($variable1,$variable2);//devuelve 1 si es ture y 0 si es false.

    echo "El resultado es " . $resultado;

    $resultado=Strcasecmp($variable1,$variable2);

    
    if($resultado){

        echo "No coinciden";

    }else{
        echo "Coinciden";
    }


    if(!$resultado){

        echo "Coinciden";

    }else{
        echo "No coinciden";
    }

?>

</body>
</html>