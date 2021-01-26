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
            <nav class="navbar navbar-expand navbar-light barmenu topbar mb-4 static-top shadow">
            <div class="container">
      <a class="navbar-brand" href="<?php echo(base_url("public/")); ?>"><img src="<?php echo(base_url("public/img/logo.png")); ?>" class="logo" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorías
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Celulares Nuevos</a></li>
            <li><a class="dropdown-item" href="#">Celulares Usados</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Accesorios</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Otros Nuevos</a></li>
            <li><a class="dropdown-item" href="#">Otros Usados</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo(base_url("public/productos/nuevos")) ?>">Nuevos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo(base_url("public/productos/usados")) ?>">Usados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contáctanos</a>
          </li>
        </ul>
      </div>
    </div>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-heart text-dark"></i>
                            <!-- Counter - Alerts -->
                        </a>
                        

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-shopping-cart text-dark"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">1</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Carrito de Compras
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                        alt="">
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Huawei P30 Pro de 256GB y 8 GB de Ram.</div>
                                </div>
                            </a>

                            <a class="dropdown-item text-center small text-gray-500" href="#">Abrir carrito</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-light-600 small">Login</span>
                            <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

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
          <h2 class="text-center text-secondary">CATEGORÍAS</h2>
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