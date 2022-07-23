<?php

class Example_model {
  private $table = 'example';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getAllArray() {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getArrayById($id) {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
  public function tambahDataArray($data) {
    $query = "INSERT INTO example VALUES(null, :no, :nama)";
    $this->db->query($query);
    $this->db->bind('no', $data['no']);
    $this->db->bind('nama', $data['nama']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}