<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model{

  public function __construct()
  {
    parent::__construct();

  }

public function validation($user,$password)
{
  # code...
    $this->db->where('user',$user);
    $this->db->where('password',$password);

    $query = $this->db->get('users');

  if ($query->num_rows() > 0) {
    # code...
    return true;

  }else {
    # code...
    return false;
  }

}





}
 ?>
