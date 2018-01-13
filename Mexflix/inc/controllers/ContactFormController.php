<?php
function send_comments() {
  $contact = new ContactFormModel();

  $contact->create(array(
    'contact_id' => 0,
    'contact_date' =>date('Y-m-d'),
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'subject' => $_POST['subject'],
    'comments' => $_POST['comments']
  ));

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
