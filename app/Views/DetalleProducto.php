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
            <li><a class="dropdown-item text-white" href="#">Celulares Nuevos</a></li>
            <li><a class="dropdown-item text-white" href="#">Celulares Usados</a></li>
            <li><hr class="dropdown-divider bg-white"></li>
            <li><a class="dropdown-item text-white" href="#">Accesorios</a></li>
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

<nav aria-label="breadcrumb">
<?php foreach($productos as $producto):?>
  <ol class="breadcrumb bg-white">
    <li class="breadcrumb-item"><a class="vlistado" href="javascript:window.history.back();">Volver al listado</a></li>
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
    <div class="col-lg-1">
    </div>  
        <div class="col-lg-2">
            <a href=""><img src="<?= $producto["foto"]?>" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="<?= $producto["foto2"]?>" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="<?= $producto["foto3"]?>" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="<?= $producto["foto4"]?>" height="100px" width="100px" alt=""></a><br>
            <a href=""><img src="<?= $producto["foto5"]?>" height="100px" width="100px" alt=""></a>
        </div>
        <div class="col-lg-6">
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
            <h3 class="page-section-heading text-uppercase text-secondary mb-0"><?= $producto["nombre"]?></h3><small class="text-muted"><?php 
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
            <br>
            <button class="btn btn-block" id="comprar" data-toggle="modal" data-target="#verModal<?php echo($producto["id"])?>">Comprar</button>
        </div>
    
    </div>
    <hr>
    <br>
    <div class="row mt-5">
    <div class="col-lg-1">
    </div>
    <?php if($producto["categoria"]==1 || $producto["categoria"]==2){?>
    <div class="col-6 p-3">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Descripción Principal</h2>
    <br>
    <table class="table table-warning caption-top">
    <tbody>
    <tr>
      <th scope="row">MARCA</th>
      <td>Xiaomi</td>
    </tr>
    <tr>
      <th scope="row">LINEA</th>
      <td>Redmi Note 8</td>
    </tr>
    <tr>
      <th scope="row">PANTALLA</th>
      <td>2080x1080 Pixeles</td>
    </tr>
    <tr>
      <th scope="row">CÁMARA FRONTAL</th>
      <td>32 Megapixeles</td>
    </tr>
    <tr>
      <th scope="row">CÁMARA PRINCIPAL</th>
      <td>48,20,16,5 Megapixeles</td>
    </tr>
    <tr>
      <th scope="row">PROCESADOR</th>
      <td>Snapdragon 735</td>
    </tr>
    <tr>
      <th scope="row">RAM</th>
      <td>4 GB</td>
    </tr>
    <tr>
      <th scope="row">ALMACENAMIENTO</th>
      <td>64 GB</td>
    </tr>
    <tr>
      <th scope="row">BATERÍA</th>
      <td>4,000 mAh</td>
    </tr>
    </tbody>
    </table>
    </div>
    <?php } ?>
    </div>
    <div class="row mt-5">
    <div class="col-lg-1">
    </div>
    <div class="col-6 p-3 bg-light">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Descripción del Producto</h2>
    <br>
    <p class="lead"><?= $producto["detalle"]?></p>
    </div>
    </div>
    <div class="row mt-5">
    <div class="col-lg-1">
    </div>
    <div class="col-6 p-3 bg-light">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Descripción de Envío</h2>
    <br>
    <p class="lead">Para realizar compras con pago contra entrega debes estar ubicado en medellin, el poblado, aguacatala, envigado, itaguí, sabaneta, la estrella ó caldas - Antioquia.</p>
    <p class="lead">El valor del domicilio en los municipios mencionados es desde $ 5,000 hasta $ 10,000 y el tiempo de entrega aproximado es de 1 a 2 días hábiles.</p>
    <p class="lead">Para envíos a otros lugares el valor del domicilio es de $ 10,000 hasta $ 20,000 y el tiempo de entrega aproximado es de 3 a 7 días hábiles.</p>
    <br>
    <p class="lead">El valor de envío y tiempos de entrega varian dependiendo del producto y lugar de destino.</p>
    </div>
    </div>
    <hr>


<!-- Hacer pedido Modal -->
<div class="portfolio-modal modal fade" id="verModal<?php echo($producto["id"])?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Modal - Title-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">HAZ TU PEDIDO</h2>                                        
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <form class="frmpedido" id="contactForm" name="sentMessage" novalidate="novalidate" method="POST" action="<?php echo(base_url("public/pedido/nuevo"))?>">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Nombre</label>
                                    <input class="form-control" id="name" name="nombre" type="text" placeholder="Nombre" required="required" data-validation-required-message="Por favor ingrese su nombre." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Correo electrónico</label>
                                    <input class="form-control" id="email" name="correo" type="email" placeholder="correo@ejemplo.com" required="required" data-validation-required-message="Por favor ingrese su correo electrónico." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Cantidad</label>
                                    <input class="form-control" id="phone" type="number" name="cantidad" placeholder="Cantidad" required="required" data-validation-required-message="Por favor ingrese la cantidad." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Teléfono</label>
                                    <input class="form-control" id="phone" type="tel" name="telefono" placeholder="Teléfono" required="required" data-validation-required-message="Por favor ingrese su teléfono." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Ciudad</label>
                                    <input class="form-control" id="phone" type="text" name="ciudad" placeholder="Ciudad o Municipio" required="required" data-validation-required-message="Por favor ingrese la ciudad o municipio." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Dirección</label>
                                    <input class="form-control" id="phone" type="text" name="direccion" placeholder="Direccción... calle 56 #..." required="required" data-validation-required-message="Por favor ingrese su dirección." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Punto de Referencia</label>
                                    <input class="form-control" id="phone" type="text" name="referencia" placeholder="Referencia... ejemplo, al frente de la panadería las vegas..." required="required" data-validation-required-message="Por favor ingrese su punto de referencia." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div class="d-grid gap-2"><button class="btn btn-primary btn-xl" id="pedido" type="submit">Hacer pedido</button></div>

                        <!--Modal-->
                        <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <input class="form-control" id="phone" type="text" name="producto" value="<?= $producto["nombre"]?>"/>
                                                        <input class="form-control" id="phone" type="text" name="valor" value="<?= $producto["valor"]?>"/>
                                                        <div class="modal-footer">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            </div>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>                 

                        </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
<!-- fin modal -->                        
                        
                        <h4><?php session('mensaje') ?></h4>
                        <?php  if(session('mensaje')):?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo(session('mensaje')) ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <?php endif ?>
                    
                
                                                       
    
    <?php endforeach ?>

<div class="row mt-5">
<div class="col-lg-1">
</div>
<div class="col-6 p-3">
<form action="">
<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Preguntas y Respuestas</h2>
<div class="row mt-5">
<div class="col-12 col-md-6">
  <input type="text" class="form-control" id="pregunta" placeholder="Nombre" name="nombre" required>
</div>
<div class="col-12 col-md-6">
<input type="email" class="form-control" id="pregunta" placeholder="Correo" name="correo" required>
 </div>
 </div>
  <div class="form-group mt-3">
    <textarea class="form-control" rows="3" name="pregunta" id="pregunta" placeholder="Pregunta.." required></textarea>
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn" id="comprar">Preguntar</button>
  </div> 
</form> 
</div>
</div>

<div class="row mt-5">
<div class="col-lg-1">
</div>
<div class="col-6 p-3">
<?php foreach($preguntas as $pregunta):?>
<h3>Últimas realizadas</h3>
<figure class="mt-3">
  <blockquote class="blockquote mt-3">
    <p><?php $pregunta["pregunta"] ?></p>
  </blockquote>
  <figcaption class="blockquote-footer">
  <?php $pregunta["respuesta"] ?><cite title="Source Title"><?php $pregunta["fecha"] ?></cite>
  </figcaption>
</figure>
<?php endforeach ?>
</div>
</div>

<!-- /.container -->
</div>
  <!-- Footer -->
  <footer class="py-5 bg-dark mt-5">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Tecimpo 2020</p>
    </div>
    <!-- /.container -->
  </footer>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
