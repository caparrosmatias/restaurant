<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Menu de opciones - caparrosmatias</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Menu de pedidos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Atras <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Sobre nosotros <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<?php

$conexion = mysqli_connect("localhost", "root", "", "restaurant") or
die("Problemas con la conexión");

$registros = mysqli_query($conexion, "SELECT clave FROM clave WHERE ID = (SELECT MAX(ID) FROM clave)") or
die("Problemas en el select:" . mysqli_error($conexion));

$clave = mysqli_fetch_array($registros);


if ($_REQUEST['pass']==$clave) {
  //echo "Correcto, su mesa es " . $_REQUEST['mesa'] . " Y el pass es " . $_REQUEST['pass'];
  echo "<div class='starter-template'><h1>Bienvenido</h1></div>";
} else {
  exit("Nos vimos");
}

?>

<main role="main" class="container">


<div class="starter-template">
<form method="post" action="pedir.php">
    Ingrese el nombre:<br>
    <input type="text" name="nombre">
    <br>
    Ingrese mesa:<br>
    <input type="text" name="mesa">
    <br>
    Ingrese la comida:<br>
    <input type="text" name="comida">
    <br>
    Seleccione su bebida:<br>
    <select name="bebida">
      <option value="1">Coca</option>
      <option value="2">Cerveza</option>
      <option value="3">Agua</option>
    </select>
    <br><br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Confirmar pedido</button>
  </form>
</div>

</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>
