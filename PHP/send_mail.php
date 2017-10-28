<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envío de correo electrónico</title>
  <style>
    form > * { display: block; }
  </style>
</head>
<body>
  <h1>Envío de correo electrónico</h1>
  <a href="./index.php">regresar</a>
  <form method="POST">
    <input type="text" name="name" placeholder="nombre" required>
    <input type="email" name="email" placeholder="email" required>
    <input type="text" name="subject" placeholder="asunto" required>
    <textarea name="comments" cols="30" rows="10"></textarea>
    <input type="submit">
    <input type="hidden" name="send_form" value="true">
  </form>
  <?php
    if ( isset($_POST['send_form']) ) {
      $to = $_POST['name'] . ' < ' . $_POST['email'] . ' >' ;
      $subject = 'Contacto desde el sitio ' . $_SERVER['HTTP_HOST'] . ': ' . $_POST['subject'];
      $message = "
        <html>
        <head>
          <title>Datos enviados desde el formulario del sitio " . $_SERVER['HTTP_HOST'] . "</title>
        </head>
        <body>
            <p>Datos enviados desde el formulario del sitio " . $_SERVER['HTTP_HOST'] . "</p>
            <ul>
              <li>Nombre: <b>" . $_POST['name'] . "</b></li>
              <li>Email: <b>" . $_POST['email'] . "</b></li>
              <li>Asunto: <b>" . $_POST['subject'] . "</b></li>
              <li>Comentarios: <b>" . $_POST['comments'] . "</b></li>
            </ul>
        </body>
        </html>
      ";
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=utf-8\r\n";
      $headers .= "From: $to";

      if ( mail($to, $subject, $message, $headers) ) {
        echo "<p>Tus datos han sido enviados</p>";
      } else {
        echo "<p>Error al enviar tus datos</p>";
      }
    }
  ?>
</body>
</html>
