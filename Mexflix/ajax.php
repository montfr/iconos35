<?php
require('./inc/models/Model.php');
require('./inc/models/MovieSeriesModel.php');
require('./inc/models/CountriesModel.php');
require('./inc/models/GenresModel.php');
require('./inc/models/UsersModel.php');
require('./inc/models/ContactFormModel.php');
require('./inc/controllers/SessionController.php');
require('./inc/controllers/ContactFormController.php');

$action = ( isset( $_POST['action'] ) ) ? $_POST['action'] : '';

switch ( $action ) {
  case 'login':
    //echo "Quieres Loguearte por POST";
    session_login();
    break;
  case 'contact':
    send_comments();
    break;
  default:
    //echo "No quiero hacer nada por POST";
    break;
}
