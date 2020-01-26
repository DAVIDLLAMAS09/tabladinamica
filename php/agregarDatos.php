<?php 

include_once "conexion.php";
$con = conexion();
  $n =  $_POST["nombre"];
  $a =  $_POST["apellido"];
  $e =  $_POST["email"];
  $t =  $_POST["telefono"];

  $sql = "INSERT INTO `personas` (`nombre`, `apellido`, `email`, `telefono`) VALUES ('$n', '$a' ,'$e', '$t') ";
//   poner un echo por que nos regresa un 0 o un 1
  echo $result = mysqli_query($con,$sql);

?>