<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tecimpo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Custom fonts for this template-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <link rel="icon" href="<?php echo(base_url("public/img/la t.png"));?>">
<!-- Custom styles for this template-->
<link href="<?php echo(base_url("public/css/sb-admin-2.min.css"));?>" rel="stylesheet">
<link href="<?php echo(base_url("public/css/stylesindex.css"));?>" rel="stylesheet" />
<link href="<?php echo(base_url("public/css/styles.css"));?>" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light barmenu">
      <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo(base_url("public/")); ?>"><img src="<?php echo(base_url("public/img/logon.png")); ?>" class="logo" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse menuletra" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorías
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="<?php echo(base_url("public/celulares/nuevos")) ?>">Celulares Nuevos</a></li>
            <li><a class="dropdown-item text-white" href="<?php echo(base_url("public/celulares/usados")) ?>">Celulares Usados</a></li>
            <li><hr class="dropdown-divider bg-white"></li>
            <li><a class="dropdown-item text-white" href="<?php echo(base_url("public/accesorios")) ?>">Accesorios</a></li>
            <li><hr class="dropdown-divider bg-white"></li>
            <li><a class="dropdown-item text-white" href="#">Otros Nuevos</a></li>
            <li><a class="dropdown-item text-white" href="#">Otros Usados</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo(base_url("public/productos/nuevos")) ?>">Nuevos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo(base_url("public/productos/usados")) ?>">Usados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Contáctanos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
            <!-- End of Topbar -->
          <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?php echo(base_url("public/img/carrusel.svg"))?>" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo(base_url("public/img/2.jpg"))?>" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo(base_url("public/img/3.jpg"))?>" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
        </div>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><h2 class="text-center text-secondary">CATEGORÍAS</h2></div>
                    <div class="divider-custom-line"></div>
                </div>
        </div>
        <div class="container">
        <div class="row mt-5">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="imgcategoria rounded" src="<?php echo(base_url("public/img/celu.svg")); ?>" alt="">
              <a href=""><p class="text-center textoimg">Celulares Nuevos</p></a>
              <a href=""><p class="text-center textoimg1">Celulares Usados</p></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href=""><img class="imgcategoria rounded" src="<?php echo(base_url("public/img/accesorios.svg")); ?>" alt=""></a>
            </div>
          </div>
        </div>
        </div>
  <!-- Footer -->
  <footer class="py-5 bg-dark mt-5">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Tecimpo <?php echo(date("Y")); ?></p>
    </div>
    <!-- /.container -->
  </footer>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>