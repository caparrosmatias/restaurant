<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "restaurant") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo,nombre,mesa,comida,bebida,date from caja") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mesa:" . $reg['mesa'] . "<br>";
    echo "Comida:" . $reg['comida'] . "<br>";
    echo "Bebida:" . $reg['bebida'] . "<br>";
    echo "Fecha:" . $reg['date'] . "<br>";
    echo "<hr>";
  }

  mysqli_close($conexion);
  ?>

</body>

</html>