<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{

  protected $table = 'users';

  public function get_all()
  {
    return $this->db->get($this->table)
      ->result();
  }


  function RegisterModel($formData)
  {
    $this->db->insert('users', $formData);

    if ($this->db->affected_rows() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function getData()
  {
    $query = $this->db->get('users', '10');
    return $query->result();
  }


  function loginModel($Email, $Pass)
  {
    $this->db->where('email', $Email);
    $query = $this->db->get('users');
    $pwd = $query->row();

    $hashed = $pwd->password;

    if (password_verify($Pass, $hashed)) {
      $row = $query->row();
      $data = array(
        'uid' => $row->uid,
        'firstname' => $row->firstname,
        'email' => $row->email,
        'validated' => TRUE
      );

      // $this->session->set_userdata($data);
      return true;
    } else {
      return false;
    }
  }

}