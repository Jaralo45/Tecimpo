<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registro - Tablero de Control</title>
    <link rel="icon" href="<?php echo(base_url("public/img/la t.png"))?>">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <link href="<?php echo(base_url("public/css/dash.css"))?>" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">Admin <?php echo(session('nombre')); ?></a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

<!-- Navbar-->
<ul class="navbar-nav ml-auto">
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Javier Ramirez</span>
            <img class="img-profile rounded-circle" height="60"
                src="<?php echo(base_url("public/img/foto.svg")); ?>">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Perfil
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Configuración
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Actividad
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo(base_url("public/registro/productos"))?>" data-toggle="modal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Cerrar sesión
            </a>
        </div>
    </li>
</ul>
</nav>
<div id="layoutSidenav">
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">NÚCLEO</div>
                <a class="nav-link" href="<?php echo(base_url("public/registro/productos")) ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Tablero de Control
                </a>
                <a class="nav-link" href="<?php echo(base_url("public/pedidos")) ?>">
                    <div class="sb-nav-link-icon"><i class="far fa-folder-open"></i></div>
                    Pedidos
                </a>
                <a class="nav-link" href="<?php echo(base_url("public/preguntas")) ?>">
                    <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cone-striped" viewBox="0 0 16 16">
                <path d="M9.97 4.88l.953 3.811C10.158 8.878 9.14 9 8 9c-1.14 0-2.159-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12zm-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.274 3.9C6.8 3.965 7.382 4 8 4c.618 0 1.2-.036 1.725-.098zm4.396 8.613a.5.5 0 0 1 .037.96l-6 2a.5.5 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l2.391-.598.565-2.257c.862.212 1.964.339 3.165.339s2.303-.127 3.165-.339l.565 2.257 2.391.598z"/>
                </svg></div>
                    Preguntas
                </a>
                <div class="sb-sidenav-menu-heading">INTERFAZ</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Diseños
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Modo Oscuro</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Modo claro</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Ayuda
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Autenticación
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo(base_url("public/cambio_de_contraseña")) ?>">Olvide mi Contraseña</a>
                            </nav>
                        </div>
                        
                    </nav>
                </div>
                
            </div>
        </div>
        
    </nav>
</div>
            
<div class="container text-center p-5">
    <h2 class="fw-bold mt-5">Registrar nuevo producto</h2>
<form method="POST" action="<?php echo(base_url("public/registro/productos/nuevos"))?>" class="p-5 m-5">
    <div class="row">
            <div class="col-12 col-md-6">
                <select class="form-control" name="categoria">
                    <option value="0">Seleccione Categoria</option>
                    <option value="1">Celular Nuevo</option>
                    <option value="2">Celular Usado</option>
                    <option value="3">Varios Nuevos</option>
                    <option value="4">Varios Usados</option>
                    <option value="5">Computador Nuevo</option>
                    <option value="6">Computador Usado</option>
                </select>
            </div>
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Nombre de Producto" name="nombre" maxlength="18">
            </div>
    </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" placeholder="Descripción Breve" name="descripcion" maxlength="30">
            </div>
            <div class="form-group form-floating">
                <textarea class="form-control" style="height: 100px" rows="3" name="detalle" placeholder="Descripción Detallada"></textarea>
                <label for="floatingTextarea2">Descripción Detallada</label>
            </div>
            <div class="row mt-3">
            <div class="col-12 col-md-4">
                <input type="text" class="form-control" placeholder="Valor Producto" name="valor">
            </div>
            <div class="col-12 col-md-4">
                <input type="number" class="form-control" placeholder="Cantidad" name="cantidad">
            </div>
            <div class="col-12 col-md-4">
            <select class="form-control" name="estado">
                    <option value="0">Seleccione Estado</option>
                    <option value="1">Nuevo</option>
                    <option value="2">Usado</option>
                </select>
            </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" placeholder="Url de la foto Principal" name="foto">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Url de la foto 2" name="foto2">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Url de la foto 3" name="foto3">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Url de la foto 4" name="foto4">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Url de la foto 5" name="foto5">
            </div>
            <div class="row mt-3">
            <div class="col-6 col-md-6">
                <select class="form-control" name="oferta">
                    <option value="0">Es Oferta</option>
                    <option value="1">No</option>
                    <option value="2">Si</option>
                </select>
            </div>
            <div class="col-6 col-md-6">
                    <input class="form-control" type="text" name="valorOferta" placeholder="Valor Oferta">
            </div>
            </div>

<!-- acordion de caracteristicas -->
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Características del Producto
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
            <div class="row mt-3">
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Marca" name="marca">
            </div>
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Linea" name="linea">
            </div>
            </div>
            <div class="row mt-3">
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Tamaño de Pantalla" name="pantalla">
            </div>
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Cámara Frontal" name="camaraf">
            </div>
            </div>
            <div class="row mt-3">
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Cámara Principal" name="camarap">
            </div>
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Procesador" name="procesador">
            </div>
            </div>
            <div class="row mt-3">
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Ram" name="ram">
            </div>
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Almacenamiento" name="almacenamiento">
            </div>
            </div>
            <div class="row mt-3">
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Sistema" name="sistema">
            </div>
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Resolución de Pantalla" name="resolucion">
            </div>
            </div>
      
            <div class="row mt-3">
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Gráficos" name="graficos">
            </div>
            
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Disco Duro" name="disco">
            </div>
            </div>
            <div class="row mt-3">
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Duración Batería" name="bateria">
            </div>
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Modelo" name="modelo">
            </div>
            </div>
            <div class="row mt-3">
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Material" name="material">
            </div>
            <div class="col-12 col-md-6">
                <input type="text" class="form-control" placeholder="Color" name="color">
            </div>
            </div>
            
      </div>
    </div>
  </div>
</div>


            
            
    <div class="d-grid gap-2 d-md-block mt-3">
                <a type="button" class="btn btn-primary" href="<?php echo(base_url("public/registro/productos")) ?>" data-dismiss="modal">Cancelar</a>
                <button type="submit" class="btn btn-success">Registrar</button>
    </div>
            
</form>
</div>
</div>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Tecimpo 2021</div>
            <div>
                <a href="#">Politica de Privacidad</a>
                &middot;
                <a href="#">Terminos &amp; Condiciones</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo(base_url("public/js/scripts.js"))?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?php echo(base_url("public/js/chart-area-demo.js"))?>"></script>
<script src="<?php echo(base_url("public/js/chart-bar-demo.js"))?>"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="<?php echo(base_url("public/js/datatables-demo.js"))?>"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>