<?php

include("conexion.php");
$con=conectar();

$ID_Cita=$_POST['ID_Cita'];
$ID_Usu=$_POST['ID_Usu'];
$ID_Paciente=$_POST['ID_Paciente'];
$FechaYHoraIni=$_POST['FechaYHoraIni'];
$FechaYHoraFin=$_POST['FechaYHoraFin'];

$sql="INSERT INTO DUP_CitaP VALUES('$ID_Cita','$ID_Usu','$ID_Paciente','$FechaYHoraIni','$FechaYHoraFin')";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paciente.php");
    }
?>