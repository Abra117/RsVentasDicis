<?php

    // We need to use sessions, so you should always start sessions using the below code.
    session_start();
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['administrador'])) {
        header('Location: /index.php');
        exit;
    }

    

?>
<?php 
    include 'php/connection.php';
    $conn=conectar();
    $usuario = $_SESSION['administrador'];

    $sql="SELECT * FROM producto";
    
    $query=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bulma.min.css">
    <link rel="stylesheet" href="assets/css/styles4.css">
    <link rel="stylesheet" href="../assets/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="../assets/css/styles3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Producto</title>

    <!-- Barra de navegación -->
<header>
</header>
</head>
    <body>
    
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">

                            <h1>Ingrese datos para agregar nuevo producto</h1>
                            
                                <form action="insertar_producto.php" method="POST">
                                <select name="pr_us_id" style="visibility:hidden">
                                    
                                <?php
                                        $servicios_id_usu="SELECT *  FROM usuario WHERE us_correo = '$usuario'";
                                        $resultado_id_usu=mysqli_query($conn,$servicios_id_usu);

                                        while ($valores_id_usu=mysqli_fetch_array($resultado_id_usu)) {
                                    
                                            echo '<option value="'.$valores_id_usu['us_id'].'">'.$valores_id_usu['us_id'].'</option>';
                                    
                                        }
                                    ?>
                                    </select>
                                    <br>
                                    <label>Nombre del producto</label>
                                    <input type="text" class="form-control mb-3" name="pr_nombre" placeholder="Ej: Quesadilla">
                                    <label>Descripcion</label>
                                    <input type="text" class="form-control mb-3" name="pr_des" placeholder="Ej: De queso">
                                    <label>Precio</label>
                                    <input type="text" class="form-control mb-3" name="pr_precio" placeholder="Ej: 10">
                                    <label>Ubicacion</label>
                                    <input type="text" class="form-control mb-3" name="pr_ubicacion" placeholder="Ej: Delante de la biblioteca">
                                    <label>Horario</label>
                                    <input type="text" class="form-control mb-3" name="pr_horario" placeholder="Ej: 10-12">
                                    <br>
                                    <a href="../index.php"><button class="btn btn-secondary" type="button">Regresar</button></a>
                                    <input type="submit" class="btn btn-success" value="Agregar">
                                    <br>
                                    <br>
                                    <br>
                                </form>
                            </div>
                                   
                    </div>  
            </div>

            
    </body>

</html>