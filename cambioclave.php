<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php


  $conexion = mysqli_connect("localhost", "root", "", "restaurant") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into clave(clave) values 
                       ('$_REQUEST[clave]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "<br><h1>Clave cambiada!</h1>";

  ?>

</body>

</html>