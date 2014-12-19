<?php

class User extends CI_Model {
  public function all()
  {
    return $this->db->query("SELECT * FROM users")->result_array();
  }
  public function find($id)
  {
    return $this->db->query("SELECT * FROM users WHERE id = ?", array($id))->row_array();
  }
  public function create($new_user)
  {
    $query = "INSERT INTO users (first_name, last_name, created_at, updated_at) VALUES (?,?,?,?)";
    $values = array($new_user['first_name'], $new_user['last_name'],
                    date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
    return $this->db->query($query, $values);
  }
  public function save($id, $user)
  {
    $query = "UPDATE users SET first_name = ?, last_name = ?, updated_at = ? WHERE id = ?";
    $values = array($user['first_name'], $user['last_name'], date("Y-m-d, H:i:s"), $id);
    return $this->db->query($query, $values);
  }
  public function destroy($id)
  {
    $query = "DELETE FROM users WHERE id = ?";
    $values = array($id);
    return $this->db->query($query, $values);
  }
}
