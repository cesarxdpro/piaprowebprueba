<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","MED-22");

$consulta="SELECT*FROM Usuario where Nom_Usu='$usuario' and Contr_Usu='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:paciente.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <footer class="bad">Contraseña Incorrecta</footer>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
