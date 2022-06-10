<!DOCTYPE html>

<html lang="pt">



<head>

    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">



    <title>Orçamento Participativo</title>

    <meta content="" name="description">

    <meta content="" name="keywords">



    <!-- Favicons -->

    <link href="" rel="icon">

    <link href="" rel="apple-touch-icon">



    <!-- Google Fonts -->

    <link

        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"

        rel="stylesheet">



    <!-- Vendor CSS Files -->

    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



    <!-- Template Main CSS File -->

    <link href="../assets/css/style.css" rel="stylesheet">

    <link href="../assets/plugins/chart.js/Chart.css" rel="stylesheet">

    <link href="../assets/plugins/chart.js/Chart.min.css" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="../admin/assets/css/dashboard.css">





</head>



<body>



    <!-- ======= Header ======= -->

    <header id="header" class="fixed-top d-flex align-items-center">

        <div class="container d-flex align-items-center">



            <div class="logo me-auto">

               <a href="?rota=Pagina-Inicial"><img src="../assets/img/img.png" width="280px" style="margin-left:-5px" alt="" class="img-fluid"></a>

            </div>



            <nav id="navbar" class="navbar order-last order-lg-0">

                <ul>

                    <li><a class="nav-link scrollto active" href="?rota=corpo">Home</a></li>

                    <li class="dropdown"><a href="#"><span>Projectos</span> <i class="bi bi-chevron-down"></i></a>

                        <ul>

                            <li><a class="nav-link scrollto" href="?rota=Projecto-Curso">Em curso</a></li>

                            <li><a class="nav-link scrollto" href="#">Pendentes</a></li>

                            <li><a class="nav-link scrollto" href="#">Concluídos</a></li>



                        </ul>

                    </li>

                    <li><a class="nav-link scrollto" href="#" onclick="return confirm('Pagina em construção')">Entrar</a></li>



                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->



            <div class="header-social-links d-flex align-items-center">

                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>

                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>

                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>

                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>

            </div>



        </div>

    </header><!-- End Header -->



    <?php 

    if(isset($_GET['rota'])){

      $rota = $_GET['rota'];



      switch($rota){



        case'Pagina-Inicial': include('./body_index.php');

            break;

        case 'Projecto-Curso': include('./project_curso.php');

            break;

        case 'Projecto-Detalhe': include('./project-details.php');

            break;

        case 'carteira': include('./list_carteira_muni.php');

        break;

        case 'Projecto-Municipio': include('./list_proj_muni.php');

        break;

        case 'Projectos': include('./list_project.php');

        break;

        case 'admin': include('../admin/cad_project.php');
        break;
      

        default:include('./body_index.php');

      }}

    ?>

    <br>

    <!--=======Footer=======-->

    <footer id="footer">



<?php if(isset($_GET['rota'])){

$rota=$_GET['rota'];



if($rota=="Pagina-Inicial"){



    ?>

        <div class="footer-top">

            <div class="container">

                <div class="row">



                    <div class="col-lg-3 col-md-6">

                        <div class="footer-info">

                            <h3>Orçamento</h3>

                            <p>

                                Luanda, Angola<br>

                                Talatona, Rua do MAT<br><br>

                                <strong>Phone:</strong> +244 938 690 039<br>

                                <strong>Email:</strong> info@example.com<br>

                            </p>

                            <div class="social-links mt-3">

                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>

                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>

                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>

                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-2 col-md-6 footer-links">

                        <h4>Acesso Rápido</h4>

                        <ul>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Projectos em Curso</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Projectos Pendestes</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Projectos Concluídos</a></li>



                        </ul>

                    </div>



                    <div class="col-lg-3 col-md-6 footer-links">

                        <h4>Em Destaques</h4>

                        <ul>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Serviços Electrónicos</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Mais Serviços</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Ministérios</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Prestadores de Serviços</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Formulários</a></li>

                        </ul>

                    </div>



                    <div class="col-lg-4 col-md-6 footer-newsletter">

                        <h4>Subscrever</h4>

                        <p>Faça a sua subscrição</p>

                        <form action="" method="post">

                            <input type="email" name="email"><input type="submit" value="Subscrever">

                        </form>



                    </div>



                </div>

            </div>

        </div>

        <?php }}?>

        <div class="container">

            <div class="copyright">

                &copy; Copyright <strong><span>MAT</span></strong>. Direito Reservado

            </div>



        </div>

    </footer><!-- End Footer -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i

            class="bi bi-arrow-up-short"></i></a>



    <!-- Vendor JS Files -->

    <script src="../assets/vendor/aos/aos.js"></script>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>

    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="../assets/vendor/php-email-form/validate.js"></script>



    <!-- Template Main JS File -->

    <script src="../assets/js/main.js"></script>

    <script src="../assets/js/chart.min.js"></script>

    <script src="../assets/plugins/chart.js/Chart.min.js"></script>

    <script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>





</body>



</html>