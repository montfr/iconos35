<?php
//Clase abstracta que nos permitirá conectarnos a MySQL
abstract class Model {
  //ATRIBUTOS
  private static $db_host = 'localhost';
  private static $db_user = 'root';
  private static $db_pass = '';
  private static $db_name = 'mexflix_35';
  private static $db_charset = 'utf8';
  private $mysql;
  private $result;
  protected $sql;
  protected $rows = array();

  //MÉTODOS
  //métodos abstractos para CRUD de clases que hereden
  abstract protected function create();
  abstract protected function read();
  abstract protected function update();
  abstract protected function delete();

  //método privado para conectarse a la base de datos
  private function db_open () {
    $this->mysql = new mysqli(
      self::$db_host,
      self::$db_user,
      self::$db_pass,
      self::$db_name
    );

    try {
      if ( $this->mysql->connect_errno ) {
        throw new Exception(
          '<li>N° de error: <mark>' . $this->mysql->connect_errno . '</mark></li>' .
          '<li>Mensaje del error: <mark>' . $this->mysql->connect_error . '</mark></li>'
        );
      }
    } catch ( Exception $e ) {
      echo '
        <h3>Error al conectarse a MySQL</h3>
        <ul>' . $e->getMessage() . '</ul>
      ';
      die();
    }
  }

  //método privado para desconectarse de la base de datos
  private function db_close () {

  }

  //método privado que ejecutará cualquier expresión mysql válida y en caso de que existan errores los  mostrará
  private function execute_query () {

  }

  //método protegido para establecer un query que afecte datos ( INSERT, UPDATE o DELETE )
  protected function set_query () {

  }
  //método protegido para obtener datos de un query ( SELECT )
  protected function get_query () {

  }
}
