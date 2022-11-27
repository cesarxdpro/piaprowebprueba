<?php
include("conexion.php");
$con=conectar();

$ID_Paciente=$_POST['ID_Paciente'];
$Nom_Pac=$_POST['Nom_Pac'];
$FechNac_Pac=$_POST['FechNac_Pac'];
$Edad_Pac=$_POST['Edad_Pac'];
$Est_Pac=$_POST['Est_Pac'];
$Peso_Pac=$_POST['Peso_Pac'];
$Dom_Pac=$_POST['Dom_Pac'];
$Enf_Pac=$_POST['Enf_Pac'];
$AntH_Pac=$_POST['AntH_Pac'];
$AntP_Pac=$_POST['AntP_Pac'];
$Aleg_Pac=$_POST['Aleg_Pac'];


$sql="INSERT INTO Paciente VALUES('$ID_Paciente','$Nom_Pac','$FechNac_Pac','$Edad_Pac','$Est_Pac','$Peso_Pac','$Dom_Pac','$Enf_Pac','$AntH_Pac','$AntP_Pac','$Aleg_Pac')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: paciente.php");
    
}else {
}
?>