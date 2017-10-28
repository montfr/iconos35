<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir Archivos al Servidor</title>
</head>
<body>
  <h1>Subir Archivos al Servidor</h1>
  <a href="index.php">regresar</a>
  <form method="POST" enctype="multipart/form-data">
    <input type="file" name="archivo" required>
    <input type="submit" value="Subir Archivo">
  </form>
  <?php
    if ( isset($_FILES['archivo']) ) {
      echo '<ul>';
      foreach ( $_FILES['archivo'] as $key => $value ) {
        echo "
          <li>
            Propiedad: <b>$key</b>.
            Valor: <b>$value.</b>
          </li>
        ";
      }
      echo '</ul>';

      $filename = $_FILES['archivo']['tmp_name'];
      $destination = './files/' . $_FILES['archivo']['name'];
      move_uploaded_file($filename, $destination);

      echo "
        <p>
          Tu archivo se ha subido lo puedes ver
          <a href='$destination' target='_blank'>aquí</a>
         </p>
      ";
    }
  ?>
</body>
</html>
