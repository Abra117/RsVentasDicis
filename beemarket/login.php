<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loggin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/logginStyle.css">
</head>
<body>
    <div class="top">
        <div class="header">
            <div class="NameCompany">
                <h1 class="nombre">BEE<span style="color: #faad17;">MARKET</span></h1>
            </div>
            <div class="ImgCompany">
                <img src="img/img2.png">
            </div>
        </div>
        <div class="Back">
                <a href="index.php">
                <img src="https://static.thenounproject.com/png/141974-200.png">
                </a>
        </div>
    </div>
    
    <div class="contenedor">
        <div class="forms">
            <div class="form loggin">
                <span class="Title">BEE <span style="color:#faad17 ; text-transform: uppercase;"> Sesión</span>
                <form action="php/login_usuario_be.php" method="POST">
                    <div class="input-field">
                    <input type="text" placeholder="Ingresa tu correo" name="correo">
                    <img  class="user"src="https://www.pngarts.com/files/3/At-Email-Sign-PNG-Picture.png">
                    </div>
                    <div class="input-field">
                    <input type="password"  placeholder="Ingresa tu contraseña" name="password">
                    <img class="pass"src="img/candado.png">
                    </div>
                    <div class="input-field button">
                        <button class="btn btn-primary w-100 h-100">Ingresar</button>
                    </div>
                 </form>
                 <div class="login-signup">
                    <span class="text">No miembro?
                        <a href="#" class="text signup-text">únete</a>
                    </span>
                </div>
            </div>
            <div class="form signup">
                <span  class="Title">BEE <span style="color:#faad17 ;">REGISTRO</span>
                <form action="php/registro_usuario_be.php" method="POST">
                    <div class="input-field">
                    <input type="text" placeholder="Ingresa tu nombre" name="nombre_completo">
                    <img  class="per"src="https://assets.stickpng.com/images/585e4bd7cb11b227491c3397.png">
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Ingresa tu correo" name="correo">
                        <img  class="user"src="https://www.pngarts.com/files/3/At-Email-Sign-PNG-Picture.png">
                        </div>
                    <div class="input-field">
                    <input type="password"  placeholder="Ingresa tu contraseña" name="password">
                    <img class="pass"src="img/candado.png">
                    </div>
                    <div class="input-field button">
                        <button class="btn btn-primary w-100 h-100">Registrar</button>
                    </div>
                    <div class="login-signup">
                        <span class="text">miembro?
                            <a href="#" class="text login-link">Regresa</a>
                        </span>
                    </div>
                 </form>
            </div>
        </div>
    </div>
     <script src="assets/js/loggin.js"></script>
</body>
</html>