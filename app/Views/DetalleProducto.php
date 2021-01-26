<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detalle - producto Tecimpo</title>

  <link rel="icon" href="<?php echo(base_url("public/img/la t.png"))?>">

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo(base_url("public/css/sb-admin-2.min.css"));?>" rel="stylesheet">
  <link href="<?php echo(base_url("public/css/stylesindex.css"))?>" rel="stylesheet" />
  <link href="<?php echo(base_url("public/css/styles.css"));?>" rel="stylesheet" />
</head>

<body>

  <!-- Navigation -->
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
                                src="<?php echo(base_url("public/img/undraw_profile.svg"));?>">
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
<div class="container-fluid">
    <div class="row mt-5">    
        <div class="col-lg-2">
            <a href=""><img src="https://www.legitreviews.com/wp-content/uploads/2015/09/evga-gtx960-ssc-4gb.jpg" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="https://github.com/Jaralo45/fotostecimpo/blob/main/ejemplo1.jpg?raw=true" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="https://github.com/Jaralo45/fotostecimpo/blob/main/ejemplo2.jpg?raw=true" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="https://github.com/Jaralo45/fotostecimpo/blob/main/ejemplo3.jpg?raw=true" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="https://github.com/Jaralo45/fotostecimpo/blob/main/ejemplo4.jpg?raw=true" height="100px" width="100px" alt=""></a>
        </div>
        <div class="col-lg-7">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://www.legitreviews.com/wp-content/uploads/2015/09/evga-gtx960-ssc-4gb.jpg" height="500px" width="500px" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://github.com/Jaralo45/fotostecimpo/blob/main/ejemplo1.jpg?raw=true" height="500px" width="500px" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://github.com/Jaralo45/fotostecimpo/blob/main/ejemplo2.jpg?raw=true" height="500px" width="500px" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://github.com/Jaralo45/fotostecimpo/blob/main/ejemplo3.jpg?raw=true" height="500px" width="500px" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://github.com/Jaralo45/fotostecimpo/blob/main/ejemplo4.jpg?raw=true" height="500px" width="500px" class="d-block" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
            </div>
        </div>
        <div class="col-lg-2">
            <h3 class="text">Tarjeta Gráfica</h3><small class="text-muted">Usado</small><br>
            <p class="display-4">$ 365,000</p>
        </div>
    
    </div>
    <hr>
</div>


      

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Tecimpo 2020</p>
    </div>
    <!-- /.container -->
  </footer>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>