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
        <title>Actualizar</title>
      
    </head>
    <body>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="ID_Paciente" value="<?php echo $row['ID_Paciente']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nom_Pac" placeholder="Nombre" value="<?php echo $row['Nom_Pac']  ?>">
                                <input type="text" class="form-control mb-3" name="FechNac_Pac" placeholder="DOB[YYYY-MM-DD]" value="<?php echo $row['FechNac_Pac']  ?>">
                                <input type="text" class="form-control mb-3" name="Edad_Pac" placeholder="Edad" value="<?php echo $row['Edad_Pac']  ?>">
                                <input type="text" class="form-control mb-3" name="Est_Pac" placeholder="Estatura en cm" value="<?php echo $row['Est_Pac']  ?>">
                                <input type="text" class="form-control mb-3" name="Peso_Pac" placeholder="Peso en Kg" value="<?php echo $row['Peso_Pac']  ?>">
                                <input type="text" class="form-control mb-3" name="Dom_Pac" placeholder="Domicilio" value="<?php echo $row['Dom_Pac']  ?>">
                                <input type="text" class="form-control mb-3" name="Enf_Pac" placeholder="Enfermedades" value="<?php echo $row['Enf_Pac']  ?>">
                                <input type="text" class="form-control mb-3" name="AntH_Pac" placeholder="Antescedentes H" value="<?php echo $row['AntH_Pac']  ?>">
                                <input type="text" class="form-control mb-3" name="AntP_Pac" placeholder="Antescedentes P" value="<?php echo $row['AntP_Pac']  ?>">
                                <input type="text" class="form-control mb-3" name="Aleg_Pac" placeholder="Alergias" value="<?php echo $row['Aleg_Pac']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </body>
</html>