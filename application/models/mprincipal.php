<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprincipal extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function providers()
  {
    # code...
    $query = $this->db->get('providers');
    return $query;
  }

  public function insert($data_start,$data_end)
  {
    # code...
    $query = $this->db->query('SELECT time_start FROM times WHERE  NOT ISNULL(time_start)  AND DATE(time_start) = DATE(NOW()) AND id_providers ='.$data_start['id_providers']);

    $row = $query->num_rows();

     $rowdiff = $query->row_array();

     $strStart = $rowdiff['time_start'];
     $strEnd   = $data_end['time_end'];

     $dteStart = new DateTime($strStart);
     $dteEnd   = new DateTime($strEnd);

     $dteDiff  = $dteStart->diff($dteEnd);

    $th =  $dteDiff->format("%H:%I:%S");

     $diff = array('th' =>  $th );


    if ($row == 0) {
      # checa entrada...
    $this->db->insert('times', $data_start);

    return 1;
  } elseif ($query) {
      # checa salida...
        $this->db->where('DATE(time_start)',date("Y-m-d"));
        $this->db->where('id_providers',$data_end['id_providers']);
        $this->db->update('times', $data_end);

          # total de horas que hizo en el dia...
          $this->db->where('DATE(time_start)',date("Y-m-d"));
          $this->db->where('id_providers',$data_end['id_providers']);
          $this->db->update('times',$diff);

      return 2;
    } else {
      # code...

    }

  }


}
