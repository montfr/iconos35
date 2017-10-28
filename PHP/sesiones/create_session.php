<?php
if ( $_POST['user'] === 'admin' && $_POST['pass'] === 'qwerty' ) {
  //inicio la sesión
  session_start();

  //creamos cuantas variables de tipo sesión necesitemos
  $_SESSION['session_status'] = true;
  $_SESSION['username'] = $_POST['user'];

  header('Location: ./protected_file.php');
} else {
  header('Location: ./index.php?error=true');
}
