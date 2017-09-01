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

  public function logout()
  {
    # code...
    $this->session->unset_userdata('user');
    $this->session->sess_destroy();
      redirect(base_url('login'));
  }

  public function form_validation()
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

  public function addproviders()
  {
    # code...
  }

public function prueba()
{
  # code...
  $this->load->view('admin/prueba');
}
//consulta
  //SELECT * FROM `providers` p JOIN `times` t ON p.id = t.id


}
