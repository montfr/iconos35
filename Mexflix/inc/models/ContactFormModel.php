<?php
final class ContactFormModel extends Model {
  public $contact_id;
  public $contact_date;
  public $name;
  public $email;
  public $subject;
  public $comments;

  public function create ( $data = array() ) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    $this->sql = "INSERT INTO contact_form SET contact_id = $contact_id, contact_date = '$contact_date', name = '$name', email = '$email', subject = '$subject', comments = '$comments'";
    $this->set_query();
  }

  public function read ( $id = '' ) {
    $this->sql = ( $id != '' )
      ? "SELECT * FROM contact_form WHERE contact_id = $id"
      : "SELECT * FROM contact_form";

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

    $this->sql = "UPDATE contact_form SET contact_date = '$contact_date', name = '$name', email = '$email', subject = '$subject', comments = '$comments' WHERE contact_id = $contact_id";
    $this->set_query();
  }

  public function delete ( $id = '' ) {
    $this->sql = "DELETE FROM contact_form WHERE contact_id = $id";
    $this->set_query();
  }
}
