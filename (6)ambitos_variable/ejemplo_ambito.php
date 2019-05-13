<?php
/*
$nombre="juan";

function dameNombre(){

    $nombre="Maria";
}

dameNombre();

echo $nombre;
*/
//include require, incluye archivos php externos
//-------
/*
$nombre="juan";

function dameNombre(){

    $nombre= "el nombre es " . $nombre;
    //no puedo acceder desde dentro de una funcion a algo que esta afuera.
}

dameNombre();

echo $nombre;

*/
$nombre="juan";

function dameNombre(){
    global $nombre;//no se refiere a una variable local si no a una variable que esta fuera.
    // global debe estar dentro de una fiuncion para hacer global la variable que esta fuera.
    $nombre= "el nombre es " . $nombre;
    
}

dameNombre();

echo $nombre;



?>