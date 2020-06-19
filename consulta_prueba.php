<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "restaurant") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "SELECT * FROM cuenta WHERE ID = (SELECT MAX(ID) FROM cuenta)") or
    die("Problemas en el select:" . mysqli_error($conexion));



$reg = mysqli_fetch_array($registros);

    echo "Codigo:" . $reg['ID'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mesa:" . $reg['mesa'] . "<br>";
    echo "Comida:" . $reg['comida'] . "<br>";
    echo "Bebida:" . $reg['bebida'] . "<br>";
    echo "Fecha:" . $reg['fecha'] . "<br>";
    echo "<hr>";

  mysqli_close($conexion);
  ?>

</body>

</html>