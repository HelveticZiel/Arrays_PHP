<?php

//1) Crea un array asociativo con los siguientes datos y claves.
//Muestra los valores del array anterior utilizando foreach. 

echo "<style= <h2> Ejercicio 1 <h2>";
echo '<h2 style="color: blue; font-family:Helvetica;">Ejercicio 1</h2>';
$lista = array("Nombre"=>"Sara", "Apellido"=>"Martínez", "edad"=>"23", "ciudad"=>"Barcelona");

$count=1;

foreach ($lista as $x => $y) {
    echo "Dato". $count. "º:". $y . "<br>";
    $count ++;
  }

//2) Muestra los valores del array del ejercicio 1
// mostrando la clave y el valor utilizando foreach

foreach($lista as $x => $y){

    echo  $x + $y ; 
/* AAAA */
}

/* 2º prueba de commit*/ 


?>