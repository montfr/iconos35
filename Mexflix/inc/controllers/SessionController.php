<?php
function session_login () {
  $user = new UsersModel();
  $user_login = $user->login( $_POST['user'], $_POST['pass'] );
  //var_dump($user_login);

  if ( $user_login ) {
    //echo "Usuario Logueado";
    //inicio la sesión
    session_start();

    //creamos cuantas variables de tipo sesión necesitemos
    $_SESSION['session_status'] = true;
    $_SESSION['user'] = $user_login[0]['user'];
    $_SESSION['email'] = $user_login[0]['email'];
    $_SESSION['name'] = $user_login[0]['name'];
    $_SESSION['birthday'] = $user_login[0]['birthday'];
    $_SESSION['pass'] = $user_login[0]['pass'];
    $_SESSION['role'] = $user_login[0]['role'];

    echo true;
  } else {
    echo false;
    //header('Location: ./index.php?error=true');
  }
}

function session_validate ( $url ) {
  session_start();
  $session = ( isset( $_SESSION['session_status'] ) ) ? true : false;
  if ( $session ) {
    require("./inc/template-parts/$url.php");
  } else {
    session_destroy();
    require('./inc/template-parts/403.php');
  }
}


function session_logout () {
  session_start();
  session_destroy();
  header('Location: ./login');
}
