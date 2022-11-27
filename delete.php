<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM Paciente  WHERE ID_Paciente='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paciente.php");
    }
?>
