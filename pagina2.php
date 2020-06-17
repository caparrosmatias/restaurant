<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php

  if ($_REQUEST['pass']=="1234") {
    echo "Correcto, su mesa es " . $_REQUEST['mesa'] . " Y el pass es " . $_REQUEST['pass'];
  } else {
    exit("Nos vimos");
  }

  ?>

<form method="post" action="pedir.php">
    Ingrese mesa:
    <input type="text" name="mesa">
    <br>
    Ingrese el nombre:
    <input type="text" name="nombre">
    <br>
    Ingrese el pedido:
    <input type="text" name="pedido">
    <br>
    <select name="codigopedido">
      <option value="1">Coca</option>
      <option value="2">Cerveza</option>
      <option value="3">Agua</option>
    </select>
    <br>
    <input type="submit" value="confirmar">
  </form>
  

</body>

</html>