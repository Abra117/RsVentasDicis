
<?php 
    include 'php/connection.php';
    $conn=conectar();

    $usu_id=$_GET['id'];

    $sql="SELECT *  FROM producto inner join usuario WHERE pr_id = '$usu_id' AND us_id = pr_us_id ";
    $query=mysqli_query($conn,$sql);
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Productos</title>
</head>


    <body>
            <div class="container mt-5">
                    <div> 
                        <div class="table">
                            <table class="table">
                                <thead class="table" >
                                    <tr>
                                        <th>Nombre:</th>
                                        <th>Correo:</th>
                                        <th>Ubicacion:</th>
                                        <th>Horario:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['us_nombre']?></th>
                                                <th><?php  echo $row['us_correo']?></th>
                                                <th><?php  echo $row['pr_ubicacion']?></th>
                                                <th><?php  echo $row['pr_horario']?></th>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            </svg>
    </body>


</html>