<?php
  //comentario de una línea
  /*
  Comentario
  de
  varias
  lineas
  */

  $nombre = 'Jonathan';
  $Nombre = 'Ulises';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Básicos en PHP</title>
</head>
<body>
  <h1>Básicos en PHP</h1>
  <h2>
    Hola mi nombre es <?php echo $nombre . ' ' . $Nombre . ' y mi edad es ' . (2017 - 1984); ?>
  </h2>
  <?php
    // PHP como preprocesador de HTML
    echo '<h3>Hola mi nombre es ' . $nombre . '</h3>' ;
    echo '<h3>Hola mi nombre es $nombre</h3>';
    echo "<h3>Hola mi nombre es $nombre</h3>";
    echo "<h3>Hola mi nombre es \$nombre</h3>";

    //PHP estructurado
    function crear_encabezados() {
      $nombre = '@jonmircha';
      $color_font = 'greenyellow';
      $bg_color = '#222';

      for ( $i = 1; $i < 7; $i++ ) {
        echo "<h$i>Encabezado de tipo $i</h$i>";
        echo '<h' . $i . '>Encabezado de tipo ' . $i . '</h' . $i . '>';
      }

      echo "
        <script>
          alert('Hola $nombre')
        </script>
        <style>
          html {
            background-color: $bg_color;
            color: $color_font;
          }
        </style>
      ";
    }

    crear_encabezados();
    echo "<p>$nombre</p>";

    //información de PHP y del servidor
    phpinfo();
  ?>
</body>
</html>
