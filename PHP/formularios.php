<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envío de Formularios con PHP</title>
</head>
<body>
  <h1>Envío de Formularios con PHP</h1>
  <a href="index.php">regresar</a>
  <h2>Formulario GET</h2>
  <form method="GET">
    <input type="text" name="nombre" placeholder="tu nombre" required>
    <input type="email" name="email" placeholder="tu email" required>
    <input type="submit">
  </form>
  <?php
    if ( isset($_GET['nombre']) && isset($_GET['email']) ) {
      echo "
        <p>Tus datos han sido enviados por GET y son:</p>
        <ul>
          <li>Nombre: <b>" . $_GET['nombre'] . "</b></li>
          <li>Email: <b>" . $_GET['email'] . "</b></li>
        </ul>
      ";
    }
  ?>
  <h2>Formulario POST</h2>
  <form method="POST">
    <input type="text" name="nombre" placeholder="tu nombre" required>
    <input type="email" name="email" placeholder="tu email" required>
    <input type="submit">
  </form>
  <?php
    if ( isset($_POST['nombre']) && isset($_POST['email']) ) {
      echo "
        <p>Tus datos han sido enviados por POST y son:</p>
        <ul>
          <li>Nombre: <b>" . $_POST['nombre'] . "</b></li>
          <li>Email: <b>" . $_POST['email'] . "</b></li>
        </ul>
      ";
    }
  ?>
</body>
</html>
