<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<style>
    h1{
        text-aling:center;
    }
    .no_validado{
        font-size:18px;
        color:#F00;
        font-weignt:bold;
    }
    .validado{
        font-size:18px;
        color:#0C3;
        font-weight:bold;
    }
</style>
<body>
<h1>USANDO OPERADORES COMPARACION</H1>
<form action="validacion.php" method="POST" name="datos_usuario" id="datos_usuario">
    <table width="15%" align="center">
        <tr>
            <td>Nombre:</td>
            <td><label for="nombre_usuario"></label>
            <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td><label for="edad_usuario"></label>
            <input type="text" name="edad_usuario" id="edad_usuario"></td>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colpan="2" aling="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
         </tr>
    </table>
</form>

<!-- 
<?php
/*
//funcion predefinida isset
//variables super globales
    if(isset ($_POST["enviando"])){

        $usuario=$_POST["nombre_usuario"];
        $edad=$_POST["edad_usuario"];

        if($usuario=="Juan" && $edad>18){
            echo "<p class='validado'>puedes entrar</p>";
        }else{
            echo "<p class=\"no_validado\">" . "No puedes entrar" . "</p>";
        }
    }
*/
?>
-->
</body>
</html>