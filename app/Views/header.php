<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <link rel="icon" href="<?php echo(base_url("public/img/la t.png"))?>">

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <div class="col-9"></div>
        <form class="d-flex">
            <button class="btn btn-outline-dark" type="submit">
                <i class="fa fa-shopping-cart"></i>
                Carrito
                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
            </button>
        </form>

        <form class="d-flex ml-1">
            <a href="<?php echo(base_url("public/inicio_de_sesion"))?>" class="btn btn-outline-dark" type="submit">
                <i class="fa fa-user" aria-hidden="true"></i>
                Ingresar
            </a>
        </form>

    </div>
  </div>
</nav>

</body>
</html>