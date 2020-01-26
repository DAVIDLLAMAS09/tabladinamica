<?php 

include_once "conexion.php";
$con = conexion();

$id = $_POST['id'];

$sql = "DELETE from personas where id='$id' ";

 echo $result = mysqli_query($con,$sql);

?>