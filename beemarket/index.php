<?php
    session_start();
    if (!isset($_SESSION['administrador'])) {
        header('Location: index.php');
        exit;
    }
?>

<?php
    include 'php/connection.php';
    $conn=conectar();
    $user=$_SESSION['administrador'];

    $sql="SELECT *  FROM producto inner join usuario WHERE pr_us_id = us_id";
    $query=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEEMARKET</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<body>
     <div class="navbox">
          <div>
          <a href="nuevo_producto.php" class="btn btn-success">Nuevo producto</a>
          </div>
          <div class="header">
            <div class="NameCompany">
              <h2>BEE<span style="color: #faad17;">MARKET</span></h2>
            </div>
            <div class="ImgCompany">
              <img src="./img/img2.png">
            </div>
          </div>

          <div class="buscar">
                    <input type="text" placeholder="Buscar" required>
                    <div class="btn">
                        <i class="icon-buscar"></i>
                    </div>
                <form method="post">
                    <input type="text" placeholder="Nombre..." name="xnombre">
                    <select name="xdescripcion">
                  <option value="">Descripcion</option>
                </select>
                </form>
           </div>

          <div class="loggIN">
            <div class="ImgLogg">
              <a href="login.php">
                <img src="./img/img1.png" >
              </a>
            </div>
            <div class="PLogg">
              <a href="login.php"><span style="color:#d79011;">Iniciar </span>Sección </a>
            </div>
          </div>
        </div>
    <div class="contenedor">
          <div class="img">
            <img src="./img/img5.png" class="Imgabeja">
          </div>

           <!-- <div class="cards"> 
           <div class="card">
          <img src="" >
          <h4></h4>
          <p>.</p>
          <p class="precio"></p>
          
          
          </div> -->

          <!-- <div class="card">
            <img src="https://www.lavanguardia.com/files/og_thumbnail/files/fp/uploads/2020/09/09/5f58b1bb6d322.r_d.627-418-0.jpeg" >
            <h4>Pasta </h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos et est, recusandae ab suscipit inventore.</p>
            <p class="precio">$235</p>
            <button class="info">más información</button>
            </div>
            <div class="card">
              <img src="https://www.lavanguardia.com/files/og_thumbnail/files/fp/uploads/2020/09/09/5f58b1bb6d322.r_d.627-418-0.jpeg" >
              <h4>Pasta </h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos et est, recusandae ab suscipit inventore.</p>
              <p class="precio">$235</p>
              <button class=info>más información</button>
              </div> 
            <div class="cardinfo">
              <div class="cardTi">
               <h3> Datos del <br><span style="color: Gray;">BEENDEDOR</span></h3>
               <p> FEELS PURE & AUTHENTIC</p>
               <img src="./img/img6.png">
              </div>
              <div class="cardcon">
                  <div class="infoven">
                    <p>Nombre:</p>
                    <p>Correo:</p>
                    <p>Ubicación:</p>
                    <p>Horario:</p>
                  </div>
              </div>
              <span class="close">X</span>
            </div>
          </div> -->
    </div>
<!-- --------------------- -->   
<br><br><br><br><br><br><br><br><br><br><br><br>         
                        <div class="cardbox">
                          <div class="adorno">
                            <h3 style="color:#d79011">BEEN<span>DEDOR</span></h3>
                            <p> FEELS PURE & AUTHENTIC</p>
                            <img src="./img/img6.png">
                          </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Mas informacion</th>
                                    </tr>
                                </thead>

                                <tbody class="mt-7">
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['pr_nombre']?></th>
                                                <th><?php  echo $row['pr_des']?></th>
                                                <th><?php  echo $row['pr_precio']?></th>                                                                               
                                                <th><a href="productos.php?id=<?php echo $row['pr_id']?>"><button>Mas informacion</button></a></th>                                      
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
            <br><br><br>
    </body>
<!-- --------------------- -->
<script src="assets/js/app.js"></script>
</html>