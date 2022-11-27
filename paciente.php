<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM Paciente";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Lista de Pacientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilos2.css" rel="stylesheet">
        

    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="container2">
                            <h1>Ingresa los Datos del Paciente</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="hidden" class="form-control mb-3" name="ID_Paciente" value=0 readonly="readonly">
                                    <input type="text" class="form-control mb-3" name="Nom_Pac" placeholder="Nombre del paciente">
                                    <input type="text" class="form-control mb-3" name="FechNac_Pac" placeholder="DOB[YYYY-MM-DD]">
                                    <input type="text" class="form-control mb-3" name="Edad_Pac" placeholder="Edad">
                                    <input type="text" class="form-control mb-3" name="Est_Pac" placeholder="Estatura en cm">
                                    <input type="text" class="form-control mb-3" name="Peso_Pac" placeholder="Peso en kg"><br><br>
                                    <input type="text" class="form-control mb-3" name="Dom_Pac" placeholder="Domicilio">
                                    <input type="text" class="form-control mb-3" name="Enf_Pac" placeholder="Enfermedades">
                                    <input type="text" class="form-control mb-3" name="AntP_Pac" placeholder="Antescedentes Per.">
                                    <input type="text" class="form-control mb-3" name="AntH_Pac" placeholder="Antescedentes Her.">
                                    <input type="text" class="form-control mb-3" name="Aleg_Pac" placeholder="Alergias">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                                <br>
                        </div>
<br>
                        <div class="container2">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombres</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Edad</th>
                                        <th>Estatura</th>
                                        <th>Peso</th>
                                        <th>Domicilio</th>
                                        <th>Enfermedades</th>
                                        <th>Antescedentes Personales</th>
                                        <th>Antescedentes Hereditarios</th>
                                        <th>Alergias</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_Paciente']?></th>
                                                <th><?php  echo $row['Nom_Pac']?></th>
                                                <th><?php  echo $row['FechNac_Pac']?></th>
                                                <th><?php  echo $row['Edad_Pac']?></th> 
                                                <th><?php  echo $row['Est_Pac']?></th>
                                                <th><?php  echo $row['Peso_Pac']?></th>
                                                <th><?php  echo $row['Dom_Pac']?></th>   
                                                <th><?php  echo $row['Enf_Pac']?></th>
                                                <th><?php  echo $row['AntP_Pac']?></th>
                                                <th><?php  echo $row['AntH_Pac']?></th>
                                                <th><?php  echo $row['Aleg_Pac']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['ID_Paciente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_Paciente'] ?>" class="btn btn-danger">Eliminar</a></th>         
                                                <th><a href="agendar.php?id=<?php echo $row['ID_Paciente'] ?>" class="btn btn-danger">Agendar Cita</a></th>                                    
                                            </tr>
                                        <?php 
                                            }
                                        ?>

                                </tbody>
                                
                                
                            </table>
                        </div>
<br><br><br>
                        <div class="container2">
                            <table class="table" >
                                    <thead class="table-success table-striped" >
                                        <th>ID Cita</th>
                                        <th>ID Usuario</th>
                                        <th>ID Paciente</th>
                                        <th>Fecha y Hora Inicio</th>
                                        <th>Fecha y Hora Fin</th>
                                    </thead>
                                <tbody>
                                        <?php
                                            $sql="SELECT * from DUP_CitaP";
                                            $result=mysqli_query($con,$sql);
                                            while($mostrar=mysqli_fetch_array($result)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $mostrar['ID_Cita']?></th>
                                                <th><?php  echo $mostrar['ID_Usu']?></th>
                                                <th><?php  echo $mostrar['ID_Paciente']?></th>
                                                <th><?php  echo $mostrar['FechaYHoraIni']?></th> 
                                                <th><?php  echo $mostrar['FechaYHoraIni']?></th>
                                   
                                            </tr>
                                        <?php 
                                            }
                                        ?>

                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>