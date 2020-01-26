<?php 


// funcion que retorma la conexion
function conexion(){
    $servidor ='localhost';
    $usuario='david';
    $bd = 'tabladinamica';
    $pass = '12345';
    $conexion = mysqli_connect($servidor,$usuario,$pass,$bd);

    return $conexion;

}


// Check connection
// if (!conexion()) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";


?>