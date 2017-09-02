<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->helper('date');
  }

  function index()
  {

    if ($this->session->userdata('user') != '') {
      # code...
      $this->load->model('madmin');
      $data['fetch'] = $this->madmin->fetch();
      $data['title'] = 'Admin Checador';
        $this->load->view('admin/dashboard', $data);
    } else {
      # code...
      redirect(base_url('login'));
    }

  }

  public function addproviders()
  {
    # code...
    $this->form_validation->set_rules('name', 'Nombre', 'required');
    $this->form_validation->set_rules('surnames', 'Apellidos', 'required');
    $this->form_validation->set_rules('school', 'Escuela o facultad', 'required');
    $this->form_validation->set_rules('keygen', 'Clave', 'required');
    if ($this->form_validation->run()) {
      # code...true
      $this->load->model('madmin');
      date_default_timezone_set('America/Mazatlan');
      $data = array(
        'name' => $this->input->post('name') ,
        'surnames' => $this->input->post('surnames') ,
        'school' => $this->input->post('school') ,
        'keygen' => $this->input->post('keygen') ,
        'registration_date' => date('d/m/y ')
      );
      $this->madmin->insert($data);
      redirect (base_url('admin'));
    }else {
      # code...
      $this->index();
    }
  }

public function prueba()
{
  # code...
  $this->load->model('madmin');
  $data['fetch'] = $this->madmin->fetch();
  $this->load->view('admin/prueba',$data);
}

public function delete()
{
  # code...
  $id = $this->uri->segment(3);
  $this->load->model('madmin');
  $this->madmin->delete_data($id);
   redirect(base_url('admin'));
}
public function provider()
{
  # code...
  $this->load->view('admin/layout/header');
  $this->load->view('admin/layout/footer');

}
//consulta
  //SELECT * FROM `providers` p JOIN `times` t ON p.id = t.id


}
