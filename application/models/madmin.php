<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
public function insert($data)
{
  # code...
  $this->db->insert('providers', $data);

}

public function fetch()
{
  # code...
  $query = $this->db->get('providers');
  return $query;
}

public function delete_data($id)
{
  # code...
  $this->db->where('id', $id);
  $this->db->delete('providers');
}


}
