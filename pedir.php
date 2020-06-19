<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php

  $cant = 0;
  if (isset($_REQUEST['check1'])) {
    $cant++;
  }
  if (isset($_REQUEST['check2'])) {
    $cant++;
  }
  if (isset($_REQUEST['check3'])) {
    $cant++;
  }
  if (isset($_REQUEST['check4'])) {
    $cant++;
  }


  $conexion = mysqli_connect("localhost", "root", "", "restaurant") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into cuenta(nombre,mesa,comida,bebida) values 
                       ('$_REQUEST[nombre]','$_REQUEST[mesa]','$_REQUEST[comida]','$_REQUEST[bebida]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "<br><h1>Pedido cargado</h1>";

  ?>

</body>

</html>