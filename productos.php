<?php

// Importar las librerías necesarias
require_once('config.php');
require_once('database.php');

// Conectarse a la base de datos
$db = new Database();
$conn = $db->connect();

// Obtener los productos de la base de datos
$sql = "SELECT * FROM productos ORDER BY id DESC";
$result = $conn->query($sql);

// Inicializar la grilla de productos
$productos = [];

// Recorrer los resultados de la consulta
while ($row = $result->fetch_assoc()) {
  // Agregar el producto a la grilla
  $productos[] = [
    'id' => $row['id'],
    'nombre' => $row['nombre'],
    'precio' => $row['precio'],
    'imagen' => $row['imagen'],
  ];
}

// Cerrar la conexión con la base de datos
$conn->close();

// Mostrar la grilla de productos
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grilla de productos</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

  <header>
    <h1>Grilla de productos</h1>
  </header>

  <section id="productos">
    <?php foreach ($productos as $producto) { ?>
      <article class="producto">
        <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
        <h2><?php echo $producto['nombre']; ?></h2>
        <p>
          <strong>Precio:</strong> <?php echo $producto['precio']; ?>
        </p>
        <a href="#">Ver detalles</a>
      </article>
    <?php } ?>
  </section>

</body>
</html>
