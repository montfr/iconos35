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
  //método privado para desconectarse de la base de datos
  //método privado que ejecutará cualquier expresión mysql válida y en caso de que existan errores los  mostrará
  //método protegido para establecer un query que afecte datos ( INSERT, UPDATE o DELETE )
  //método protegido para obtener datos de un query ( SELECT )
}
