<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detalle - producto Tecimpo</title>

  <link rel="icon" href="<?php echo(base_url("public/img/la t.png"))?>">
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
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
            <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo(base_url("public/")); ?>"><img src="<?php echo(base_url("public/img/logo.png")); ?>" class="logo" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

<nav aria-label="breadcrumb">
<?php foreach($productos as $producto):?>
  <ol class="breadcrumb bg-white">
    <li class="breadcrumb-item"><a href="<?php echo(base_url("public/productos/usados"));?>">Volver al listado</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php 
                                                  if($producto["categoria"]==0){
                                                    echo("No Aplica");
                                                  }else if($producto["categoria"]==1){
                                                    echo("Celulares Nuevos");
                                                  }else if($producto["categoria"]==2){
                                                    echo("Celulares Usados");
                                                  }else if($producto["categoria"]==3){
                                                    echo("Accesorios");
                                                  }else if($producto["categoria"]==4){
                                                    echo("Otros Nuevos");
                                                  }else if($producto["categoria"]==5){
                                                    echo("Otros Usados");
                                                  }
                                                ?></li>
  </ol>
<?php endforeach ?>
</nav>
<div class="container-fluid">
<?php foreach($productos as $producto):?>
    <div class="row mt-5">    
        <div class="col-lg-2">
            <a href=""><img src="<?= $producto["foto"]?>" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="<?= $producto["foto2"]?>" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="<?= $producto["foto3"]?>" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="<?= $producto["foto4"]?>" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="<?= $producto["foto5"]?>" height="100px" width="100px" alt=""></a>
        </div>
        <div class="col-lg-7">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?= $producto["foto"]?>" height="500px" width="500px" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?= $producto["foto2"]?>" height="500px" width="500px" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?= $producto["foto3"]?>" height="500px" width="500px" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?= $producto["foto4"]?>" height="500px" width="500px" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?= $producto["foto5"]?>" height="500px" width="500px" class="d-block" alt="...">
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
            <h3 class="text"><?= $producto["nombre"]?></h3><small class="text-muted"><?php 
                                                  if($producto["categoria"]==0){
                                                    echo("No Aplica");
                                                  }else if($producto["categoria"]==1){
                                                    echo("Nuevo");
                                                  }else if($producto["categoria"]==2){
                                                    echo("Usado");
                                                  }else if($producto["categoria"]==3){
                                                    echo("Nuevo");
                                                  }else if($producto["categoria"]==4){
                                                    echo("Nuevo");
                                                  }else if($producto["categoria"]==5){
                                                    echo("Usado");
                                                  }
                                                ?></small><br>
            <p class="display-4">$ <?= number_format($producto["valor"])?></p>
            <hr>
            <br>
            <p><i class="fas fa-shipping-fast fa-lg"></i>&nbsp;&nbsp; Envíos a Medellin $10,000 fuera $15,000</p>
            <p><i class="fas fa-dolly fa-lg"></i>&nbsp;&nbsp; Pago contra entrega solo en medelin</p>
            <br>
            <p><i class="fas fa-shield-alt fa-lg text-success"></i>&nbsp;&nbsp; 100% Producto recomendado</p>
            <p class="text-warning h1">&nbsp;&nbsp; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
        </div>
    
    </div>
    <hr>
    <?php endforeach ?>
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
