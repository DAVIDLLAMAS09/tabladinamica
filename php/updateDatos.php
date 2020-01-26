<?php 

include_once "conexion.php";
$con = conexion();
  $id = $_POST['id'];
  $n =  $_POST["nombre"];
  $a =  $_POST["apellido"];
  $e =  $_POST["email"];
  $t =  $_POST["telefono"];

//   UPDATE `personas` SET `nombre` = 'david llamas' WHERE `personas`.`id` = 1;

  $sql = "UPDATE personas SET 
                    nombre='$n', 
                   apellido='$a', 
                    email='$e', 
                    telefono='$t' where id='$id'";
//   poner un echo por que nos regresa un 0 o un 1
  echo $result = mysqli_query($con,$sql);

?>