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

<style>
    .quadrado {
  
  animation: go-back 1s infinite alternate;
}

@keyframes go-back {
  from {
    transform: translateX(100px);
  }
  to {
    transform: translateX(0);
  }
}

/*** inicio card */

:root {
  --primary: #FFCE00;
  --secondary: #FE4880;
  --dark: #212121;
  --light: #F3F3F3;
}


.cards {
  margin: 20px auto 0;
  width: 100%;
  height: 600px;
  perspective: 1000px;
}

.card__inner {
 /* width: 100%;
  height: 100%;*/
  height:500px;
  transition: transform 1s;
  transform-style: preserve-3d;
  cursor: pointer;
  position: relative;
}

.card__inner.is-flipped {
  transform: rotateY(180deg);
}


.card__face {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  overflow: hidden;
  border-radius: 16px;
  box-shadow: 0px 3px 18px 3px rgba(0, 0, 0, 0.2);
}

.card__face--front {
  background-image: linear-gradient(to bottom right, var(--primary), var(--secondary));
  display: flex;
  align-items: center;
  justify-content: center;
}

.card__face--front h2 {
  color: #fff;
  font-size: 32px;
}

.card__face--back {
  background-color: var(--light);
  transform: rotateY(180deg);
}

.card__content {
  width: 100%;
  height: 100%;
}

.card__header {
  position: relative;
  padding: 30px 30px 40px;
}

.card__header:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: linear-gradient(to bottom left, var(--primary) 10%, var(--secondary) 115%);
  z-index: -1;
  border-radius: 0px 0px 50% 0px;
}

.pp {
  display: block;
  width: 128px;
  height: 128px;
  margin: 0 auto 30px;
  border-radius: 50%;
  background-color: #FFF;
  border: 5px solid #FFF;
  object-fit: cover;
}

.card__header h2 {
  color: #FFF;
  font-size: 15px;
  font-weight: 900;
  text-transform: uppercase;
  text-align: center;
}

.card__body {
  padding: 30px;
}

.card__body h3 {
  color: var(--dark);
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 15px;
}

.card__body p {
  color: var(--dark);
  font-size: 18px;
  line-height: 1.4;
}

/*** fim card */


</style>
<script>
  /*  const card = nodeList = document.querySelector(".card__inner");

card.addEventListener("click", function (e) {
  card.classList.toggle('is-flipped');
});*/

const cards = document.querySelectorAll(".card__inner");

function flipCard() {

    // "unflip" all cards other than the one clicked
    cards.forEach((card) => {
      if(card != this) {
        card.classList.remove('is-flipped');
      }
    });
    
    this.classList.toggle('is-flipped');
};

cards.forEach((card) =>card.addEventListener("click", flipCard));

</script>

</html>