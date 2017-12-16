<?php
final class UsersModel extends Model {
  public $user;
  public $email;
  public $name;
  public $birthday;
  public $pass;
  public $role;

  public function create ( $data = array() ) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    $this->sql = "INSERT INTO users SET user = '$user', email = '$email', name = '$name', birthday = '$birthday', pass = MD5('$pass'), role = '$role'";
    $this->set_query();
  }

  public function read ( $id = '' ) {
    $this->sql = ( $id != '' )
      ? "SELECT * FROM users WHERE user = '$id'"
      : "SELECT * FROM users";

    $this->get_query();
    $data = array();
    foreach ($this->rows as $key => $value) {
      array_push($data, $value);
    }

    return $data;
  }

  public function update ( $data = array() ) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    $this->sql = "UPDATE users SET email = '$email', name = '$name', birthday = '$birthday', pass = MD5('$pass'), role = '$role' WHERE user = '$user'";
    $this->set_query();
  }

  public function delete ( $id = '' ) {
    $this->sql = "DELETE FROM users WHERE user = '$id'";
    $this->set_query();
  }

  public function login ( $user, $pass ) {
    $this->sql = "SELECT * FROM users WHERE user = '$user' AND pass = MD5('$pass')";

    $this->get_query();
    $data = array();
    foreach ($this->rows as $key => $value) {
      array_push($data, $value);
    }

    return $data;
  }
}
