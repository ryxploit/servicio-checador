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
  $this->db->where('idp', $id);
  $this->db->delete('providers');
}

public function data_provider($id)
{
  # code...
  $query = $this->db->query('SELECT * FROM `providers` p JOIN `times` t ON p.idp = t.id_providers WHERE t.id_providers='.$id);
  return $query;
}

public function total_hours($id)
{
  # code...
  $query = $this->db->query('SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(th)))   AS total FROM `providers` p JOIN `times` t ON p.idp = t.id_providers WHERE t.id_providers='.$id);
  return $query;
}

public function update($data,$id)
{
  # code...
  $this->db->where('idp', $id);
  $this->db->update('providers', $data);
}

public function fetchupdate($id)
{
  # code...
  $this->db->where('idp', $id);
  $query = $this->db->get('providers');
  return $query;
}




}
