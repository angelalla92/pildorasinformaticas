<?php
function incrementaVariable(){

    $contador=0;
    $contador++;
    echo $contador . "<br>";


}//cuando termina la funcion la variable se destruye

incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();
function incrementaVariable2(){

    static $contador=0;
    $contador++;
    echo $contador . "<br>";


}/*cuando queremos que se conserve el valor creamos una variable static
*/
incrementaVariable2();//1
incrementaVariable2();//2
incrementaVariable2();//3
incrementaVariable2();//4

?>