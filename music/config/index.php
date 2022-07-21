<?php


if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(empty($_SESSION["static"]) AND empty($_SESSION["google"])) 
{
    header("Location: /login/");
}

if(isset($_SESSION["google"]))
{
    echo "<script>alert('Tú eres un usuario iniciado sesión de Google, opción disponible para usuarios registrados');</script>";
    echo "<script>window.location.href='/';</script>";
}

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-MX" xml:lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Music Mentor</title>
    <link rel="icon" href="/img/core-img/favicon.png"> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/036.css"> </head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


<body>
    
    <div id="preloader">
        <div class="loader"></div>
    </div> 
    
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <form action="/">
                            <div class="gcse-search"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">
                        <!-- Logo -->
                        <a class="nav-brand" href="/"><img src="/img/core-img/logo.png" alt=""></a>
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler"> <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="/">Inicio</a></li>
                                    <li><a href="/music/acordes/">Acordes</a></li>                                 
                                    <li><a href="/music/nosotros/">Nosotros</a></li>
                                    <li><a href="/music/preguntas/">Preguntas</a></li>
                                    <li><a href="/music/historial/">Historial</a></li>
                                    <li><a href="/music/comandos/">Comandos de voz</a></li>
                                    <li><a href="/music/config/">Configuración</a></li>
                                    <li><a href="/php/cerrar.php">Salir</a></li>




                                     <li> <p id="microfono" href="" class="fal fa-microphone-alt"></p></li>
                                    <li> <p id="audioModi" href="" class="fal fa-volume-up"></p></li>

                                </ul>
                                <!-- Search Icon -->
                 
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="alert">
            <p><strong>Reconocido:</strong> <span id="reconocido"></span></p>
            <button class="limpiar" id="limpiarP"><strong>Limpiar</strong></button>
            </div>
    </header>
   
    
    <!-- Header Area End -->
    <!-- Welcome Area Start -->
    <div class="service_area" >
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="/"><i class="icon_house_alt"></i> Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Configuración</li>
        </ol>
        <div class="container canciones text-center ">
            
            <h1>Configuración de Usuario</h1><br>
            <h3>Cambio de contraseña</h3>
            <form name="contact" id="contact" action="/php/cambio.php" method="post">
                <div class="form-group">
                    <label for="departamento">
                        Clave:
                        <input type="password" name="password" class="form-control password1" required />
                    </label>
                </div>
                <div class="form-group">
                    <label for="departamento">
                        Repita la clave:
                        <input type="password" name="password2" class="form-control password2" required  />

                        <small id="emailHelp" class="form-text text-muted">Las claves deben coincidir</small>
                    </label>
                </div>        
                <input type="submit" name="submit" value="Enviar" class="btn btn-secondary"/>
            </form>

           
        
        </div>
    </div>
    
    <div class="discuss_projects">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project_text text-center">
                        
                        <h3 class="wow fadeInUp" data-wow-delay="400ms">Aprendiendo con tu voz </h3>
                        <p class="wow fadeInUp" data-wow-delay="600ms">La mejor forma de aprender música</p>
                        <img src="/img/emote.gif" width="250" alt="404 image" class="wow fadeInUp" data-wow-delay="700ms" style="width:300px;height:275px; margin:  -left: 5%" />
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>   <br>  

    
    <div class="container">
        
    </div>
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->Music Mentor |
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> &copy; Todos los Derechos Reservados  </p>
                        </div>

                        <div class="social-info"> <a href="https://www.youtube.com/c/arkano036" target="_blank"><i class="ti-youtube" aria-hidden="true"></i></a> <a href="https://discord.gg/jUb7ak3" target="_blank"><i class="fab fa-discord" aria-hidden="true"></i> </a><a href="mailto:" target="_blank"><i class="ti-email" aria-hidden="true"></i> </a> <a href="https://www.facebook.com" target="_blank"><i class="ti-facebook" aria-hidden="true"></i></a> <a href="https://twitter.com" target="_blank"><i class="ti-twitter-alt" aria-hidden="true"></i></a> <a href="https://instgram.com" target="_blank"><i class="ti-instagram" aria-hidden="true"></i></a></div>
                        
                        </div>
                    </div>
                
            </div>
        </div>



    </footer>
    <script src="/js/dist/annyang.min.js"></script>
    <script src="/js/comandos.js"></script>
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/alime.bundle.js"></script>
    <script src="/js/default-assets/active.js"></script>
    
</body>

</html>