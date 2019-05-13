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

<?php

//funcion predefinida isset
//variables super globales
    if(isset ($_POST["enviando"])){

        $usuario=$_POST["nombre_usuario"];
        $edad=$_POST["edad_usuario"];

        if($usuario=="Juan" && $edad>18){
            echo "<p class='validado'> puedes entrar </p>";
        }else{
            echo "<p class=\"no_validado\">" . "No puedes entrar" . "</p>";
        }
    }

?>