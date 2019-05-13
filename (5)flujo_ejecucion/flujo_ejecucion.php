<?php
    /*el flujo va de arriba a bajo.
      estructuras que interumpen con el flujo de ecucion del programa 
      condicionlanes, bucles, funciones
      porque se dice que estas estructuras rompen con el flujo de ejecucion
      del programa que de un principio va de arriba a abajo.
      porque una funcion no ejecuta el codiogo que hay en su interior hasta que esa funcion no es llamada
      una funcion tiene un ambito o zona de actuacion y es entre dos llaves. 
     */
    
    echo "Este es el primer mensaje <br>";

    function dameDatos(){

        echo "Esta es la linea dentro de la funcion <br>";
    }//este codig sera ignorado como a ti te ingnoran
    dameDatos();//y este codigo hara que el flujo de ejecucion suba hacia la funcion
    /*la principal utilidad que iene unafuncion, es la reutilizacion del codigo o la repeticion de tareas
    tu puedes llamar a una funcion las veces que quieras*/
    echo "Este es el segundo mensaje <br>";
    dameDatos();
    dameDatos();
    dameDatos();
    //si por ejemplo llamo a un archivo que no existe. marca el error pero el programa 
    //se ejecutara, el include es más flexibles con esto le estamos diciendo que incluya el archivo pero 
    //no existe por lo menos que ejecute el resto del programa.
    //include ("proporciona_datosss.php");
    include ("proporciona_datos.php");
    //si sustitulles a un include por un require,apartir del error para adelante no se ejecuta nada,
    //con esto le dices al codigo que este archivo es requerido para el funcionamiento del programa
    
    //require ("proporciona_datosss.php");

    //vas creando pequeñas piezas php y luego las vas uniendo con estas instrucciones que son require y include,
    mandardatos();//el fallo surgira aqui, cuando llame a esta 
    //funcion porque no la va encontrar porque este archivo no existe.
?>