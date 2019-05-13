<?php
    /*las variables empiezan con el simbolo dolar
    no puede empezar con numeros, no espacios en blanco, 
    no simbolos raros, no es lo mismo una comilla doble y una comilla simple
    reserva un espacio en la memoria del ordenador.
    php es un lenguaje flexible con el tipo de dato
    los datos numericos no van entre ccomillas
     */

     $nombre="Juan";
     $edad=18;
     print $nombre;
     print "El nombre del usuario es " . $nombre;
     
     //lo que consigues con la comilla doble es indicarle al 
     //codigo php que tiene que escribir literalmente lo que nosotros 
     //le indiquemos entre esas comillas dobles de esa forma ingnora que eso puede 
     //ser una variable y lo escribe talcual. 
     //las comillas simples se puden
     print "El nombre del usuario es $nombre ";
     print 'El nombre del usuario es $nombre';
     echo $nombre;
     echo "El nombre es " . $nombre . " y tiene " . $edad . " años ";
     echo $nombre,$edad;
    /** echo es una expresion */

     //print $nombre,$edad;
     //print no admite imprimir en pantalla varias variables o varias expresiones

     /*print es una funcion que devuelve el valor 1
     print se toma mas tiempo para imprimir*/

     //--------
     /*ambito de las variables
     
     local.-si una variable es declada dentro de una funcion quiere 
     decir que esa funcion solo funciona dentro de esa funcion.
     global.-una variable con un ambito global quiere decir que la podemos declarar en cualquier lugar
     del codigo. podemos utilixzarla en cualquier lugar del codigo.

     super global.-para poder acceder incluso desde otro archivo.
     */
     
     
?>