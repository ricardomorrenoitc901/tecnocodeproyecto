<?php
session_start();
if(empty($_SESSION['active'])){
    header('location: iniciarS_Usuario.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/IToLogo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="indexUsuario.html" class="navbar-brand ms-4 ms-lg-0">
            <img src="img/IToLogo.png" width="45px"> &nbsp;<img src="img/IT Outsourcing.png" style="padding-bottom: 5px;" width="140px">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="indexUsuario.html" class="nav-item nav-link active">Inicio</a>
                <a href="#" class="nav-item nav-link">Quienes sómos</a>
                <a href="#" class="nav-item nav-link">Servicios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
                        <?php
                        echo $_SESSION['nombre'];
                        echo '&nbsp';
                        echo $_SESSION['aPaterno'];
                        ?>
                    </a>
                    <div class="dropdown-menu m-0">
                        <a href="perfil.php" class="dropdown-item">Ver Perfil</a>
                    </div>
                </div>
            </div>
            <a href="salir.php" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Cerrar Sesión<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/office.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px; text-align: center;">
                            <img src="img/IT Outsourcing.png" width="350px">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">Conseguir trabajo nunca fue tan fácil.</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-users text-primary me-3"></i>TecnoCode</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-school text-primary me-3"></i>Universidad Tecnológica de Nezahualcóyotl</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/equipo2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px; text-align: center;">
                            <img src="img/IT Outsourcing.png" width="350px">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">Conseguir trabajo nunca fue tan fácil.</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-users text-primary me-3"></i>TecnoCode</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-school text-primary me-3"></i>Universidad Tecnológica de Nezahualcóyotl</h4>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-uppercase">Opciones</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/empresas.jpg">
                            <div class="team-social">
                                <a class="btn btn-primary py-3 px-5" href="formEmpresas.php">Registrar</a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Empresas</h5>
                            <span class="text-primary">Registro De Empresas</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/ofertas1.jpg" >
                            <div class="team-social">
                                <a class="btn btn-primary py-3 px-5" href="formOfertas.html">Registrar</a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Ofertas</h5>
                            <span class="text-primary">Registro De Ofertas</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/administrador.jpg">
                            <div class="team-social">
                                <a class="btn btn-primary py-3 px-5" href="iniciarS_Admin.html">Iniciar Sesión</a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Administrador</h5>
                            <span class="text-primary">Vista de Administrador</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">TecnoCode</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>Universidad Tecnológica de Nezahualcóyotl S/N col. Benito Juárez</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>5656565656</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>tecnocode12@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Otros Equipos</h4>
                    <a class="btn btn-link" href="">Aurum</a>
                    <a class="btn btn-link" href="">TecnoTeam 2.0</a>
                    <a class="btn btn-link" href="">Dev's Systems</a>
                    <a class="btn btn-link" href="">SofTeam</a>
                    <a class="btn btn-link" href="">Methodology Space</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Contactanos</h4>
                    <div class="position-relative mb-4">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Enviar</button>
                    </div>
                    <div class="d-flex pt-1 m-n1">
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        Copyright &copy; <a class="border-bottom" href="indexUsuario.html">TecnoCode 2022</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Derechos Reservados
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>