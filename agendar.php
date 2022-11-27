<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM Paciente WHERE ID_Paciente='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilos2.css" rel="stylesheet">
        <title>Agendar Cita</title>
      
    </head>
    <body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="container mt-5">
                    <form action="agregarc.php" method="POST">
                                <input type="hidden" class="form-control mb-3" name="ID_Cita" value="0">
                                <input type="hidden" class="form-control mb-3" name="ID_Usu" value="1">
                                <input type="text" name="ID_Paciente" value="<?php echo $row['ID_Paciente']  ?>" readonly="readonly">
                                <input type="text" class="form-control mb-3" name="FechaYHoraIni" placeholder="FyHIni[YYYY-MM-DD HH:MM:SS]">
                                <input type="text" class="form-control mb-3" name="FechaYHoraFin" placeholder="FyHFin[YYYY-MM-DD HH:MM:SS]">

                            <input type="submit" class="btn btn-primary btn-block" value="Agendar">
                    </form>
                    
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </body>
</html>