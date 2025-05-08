<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Astrocakes</title>
    <link rel="icon" href="../img/MoonbitTransparent.png">
    <link rel="stylesheet" href="../css/bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/loginStyles.css">
    <link rel="stylesheet" href="../css/index2.css">
    <link rel="stylesheet" href="../css/load.css">
    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.cs">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" href="../img/MoonbitTransparent.png">
    <link rel="stylesheet" href="../css/bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/catalogoStyles.css">
</head>
<body>
    <div class="loader-container">
        <div class="spinner"></div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #340144;">
        <a class="navbar-brand d-lg-none" href="../index.html"><img src="../img/AstrocakesSmall2sinbg.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbarToggler7"
            aria-controls="myNavbarToggler7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse "  id="myNavbarToggler7">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.html"><p class=" ff">Home</p></a>
                </li>
                <li class="nav-item navtext">
                    <a class="nav-link navtext" href="../api/login.php"><p class=" ff">Login</p></a>
                </li>
                <a class="d-none d-lg-block" href="../index.html"><img src="../img/Astrocakes-word.png"></a>
                <li class="nav-item">
                    <a class="nav-link" href="../html/CatalogoAstrocake.html"><p class=" ff">Catálogo</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/aboutus.html"><p class="ff">Nosotros</p></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- FIN NAVBAR -->
    <br>
    <section class="container">
        <div class="row g-0 justify-content-center">
            <div class="login-window">
                <form action="registrar.php" method="post">
                    <div><h2>Sign In</h2></div>
                    <img class="astronaut-login" src="../img/Rocket3.gif" alt="Profile Picture">
                    <div>
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="name" placeholder="Nombre">
                    </div>
                    <div>
                        <label class="form-label">Apellido</label>
                        <input class="form-control" type="text" name="last_name" placeholder="Apellido">
                    </div>
                    <div>
                        <label class="form-label">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Email">
                    </div>
                    <div>
                        <label class="form-label">Contraseña</label>
                        <input class="form-control" type="text" name="pass" placeholder="Contraseña">
                    </div>
                    <div>
                        <input class="form-control" type="hidden" name="oculto" value="Dato Oculto">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Crear cuenta">
                    <br>
                    <br>
                    <div>
                        <label class="form-label">¿Ya tienes una cuenta?</label>
                        <a href="login.php">Inicia sesión aquí</a><br>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </section>

    <footer class="container-fluid">
        <div class="row g-0 justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 align-self-center px-4">
                <div class="row g-0" align="center">
                    <a href="../index.html">
                        <img class="astrocakes-word" src="../img/Astrocakes-word.png">
                    </a>
                </div> 
                <div class="row g-0 justify-content-center text-center text-lg-start">
                    <p>Somos una empresa 100% galáctica con 6 años
                        de experiencia en la repostería espacial.
                        en la elaboración de pasteles fuera de este mundo.
                    </p>
                    <p>Buscamos satisfacer los gustos de cualquier ser viviente
                        en el universo, a través de un servicio de calidad y
                        productos elaborados con los mejores ingredientes de la 
                        galaxia.
                    </p>
                </div>
                <div class="row g-0 justify-content-center">
                    <div class="col-4" align="right">
                        <a href="">
                            <img class="socialNetwork-icon" src="../img/facebook_icon.png">
                        </a>
                    </div>
                    <div class="col-4" align="center">
                        <a href="">
                            <img class="socialNetwork-icon" src="../img/instagram_icon.png">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="">
                            <img class="socialNetwork-icon" src="../img/twitter_icon.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 align-self-center px-4">
                <div class="row g-0 justify-content-center text-center text-lg-start">
                    <h3><img class="contact-icon" src="../img/milky-way.png">Sucursal Galaxia</h3>
                    <p><img class="contact-icon" src="../img/map.png">Calle Galaxia 14307, Col. Osa Mayor.</p>
                    <p><img class="contact-icon" src="../img/telephone.png">+55 822 234 76</p>
                    <p><img class="contact-icon" src="../img/whatsapp.png">+52 222 763 4558.</p>
                    <p><img class="contact-icon" src="../img/email.png">ventas@astrocakes.com</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 align-self-center px-4">
                <div class="row g-0 justify-content-center text-center text-lg-start">
                    <h3><img class="contact-icon" src="../img/milky-way.png">Horarios de atención:</h3>
                    <p>Lunes a Viernes: 9:00 AM - 8:00 PM</p>
                    <p>Sábado y Domingo: 11:00 AM - 6:00 PM</p>
                </div>
                <div class="row g-0 justify-content-center">
                    <img class="rocket2" alt="Cohete" src="../img/Rocket2-unscreen.gif">
                </div>
            </div>
        </div>
    </footer>
    <div class="text-center p-2 copy">
        © 2022 Copyright:
        <a target="blank" href="https://github.com/MartinOtamendiT">Martin Otamendi</a>
        &
        <a target="blank" href="https://github.com/IvanTalavera">Iván Talavera</a>
    </div>
    
    <div class="stars"></div>
    <script type="text/javascript" src="../css/bootstrap-5.2.2-dist/js/bootstrap.bundle.js"></script>
    <script src="../js/load.js"></script>
</body>
</html>