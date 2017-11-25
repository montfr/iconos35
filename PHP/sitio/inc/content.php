<?php
$route = ( isset( $_GET['p'] ) ) ? $_GET['p'] : 'home' ;

switch ( $route ) {
  case 'home':
    require('./inc/template-parts/home.php');
    break;
  case 'acerca':
    require('./inc/template-parts/acerca.php');
    break;
  case 'servicios':
    require('./inc/template-parts/servicios.php');
    break;
  case 'proyectos':
    require('./inc/template-parts/proyectos.php');
    break;
  case 'contacto':
    require('./inc/template-parts/contacto.php');
    break;
  case 'blog':
    require('./inc/template-parts/blog.php');
    break;
  default:
    require('./inc/template-parts/404.php');
    break;
}
