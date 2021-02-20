<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Usados Tecimpo</title>

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
            <li><a class="dropdown-item text-white" href="<?php echo(base_url("public/otros/nuevos")) ?>">Otros Nuevos</a></li>
            <li><a class="dropdown-item text-white" href="<?php echo(base_url("public/otros/usados")) ?>">Otros Usados</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo(base_url("public/productos/nuevos")) ?>">Nuevos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo(base_url("public/productos/usados")) ?>">Usados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo(base_url("public/contacto")) ?>">Contáctanos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row">

      <div class="col-lg-2">

        <h1 class="my-4"><img src="<?php echo(base_url("public/img/logo.png"))  ?>" class="w-100" alt="" class="rounded"></h1>
        <div class="categoria bg-dark p-3 rounded text-light">
        <h5 class="text-center mt-3">CATEGORÍAS</h5>
        <hr class="dropdown-divider bg-white mt-4">
        <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header text-light" id="flush-headingOne">
      <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Celulares
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a class="btn text-light" href="<?php echo(base_url("public/celulares/nuevos")) ?>">Nuevos</a>
        <a class="btn text-light" href="<?php echo(base_url("public/celulares/usados")) ?>">Usados</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Otros
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a class="btn text-light" href="<?php echo(base_url("public/otros/nuevos")) ?>">Nuevos</a>
        <a class="btn text-light" href="<?php echo(base_url("public/otros/usados")) ?>">Usados</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Accesorios
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a href="<?php echo(base_url("public/accesorios")) ?>" class="btn text-light">Accesorios</a>
      </div>
    </div>
  </div>
</div>
      </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-10 mt-4">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="<?php echo(base_url("public/img/usados.png"))?>" alt="First slide">
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <?php foreach($productos as $producto):?>
            <?php if($producto["categoria"]==5 || $producto["categoria"]==2){ ?>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <a href="<?php echo(base_url("public/detalle/producto/".$producto["id"])) ?>"><img class="card-img-top" src="<?= $producto["foto"] ?>" height="300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?php echo(base_url("public/detalle/producto/".$producto["id"])) ?>"><?= $producto["nombre"]?></a>
                </h4>
                <h5>$ <?= number_format($producto["valor"])?></h5>
                <p class="card-text"><?= $producto["descripcion"]?></p>
              </div>

            </div>
          </div>
          <?php } ?>
          <?php endforeach?>
          

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

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
