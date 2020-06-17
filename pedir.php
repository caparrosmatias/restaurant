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
  echo $_REQUEST['nombre'];
  echo " practica $cant deportes.";


  $conexion = mysqli_connect("localhost", "root", "", "restaurant") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into pedidos(nombre,pedido,codigopedido) values 
                       ('$_REQUEST[nombre]','$_REQUEST[mesa]',$_REQUEST[codigopedido])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";

  ?>

</body>

</html>