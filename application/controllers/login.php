<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */

class Login extends CI_Controller
{

public function __construct()
{
  parent::__construct();
  $this->load->library('encryption');

}

public  function index()
  {
    # code...
  $data['title']  = 'Login';
  $data['head']  = 'Login Checador <i class="fa fa-heart text-danger" aria-hidden="true"></i>';
  $this->load->View('validacion/vlogin',$data);
  }

public function check()
{
  # code...
  $this->load->library('form_validation');
  $this->load->library('encryption');
  $this->form_validation->set_rules('user','Usuario','required');
  $this->form_validation->set_rules('password','Contraseña','required');
  if ($this->form_validation->run()) {
    # code...
    //true
    $user = $this->input->post('user');
    $password = sha1($this->input->post('password'));
    //model funcion
    $this->load->model('mlogin');
    if ($this->mlogin->validation($user,$password)) {
      # code...
      $session_data = array(
        'user' => $user
        );
        $this->session->set_userdata($session_data);
        redirect(base_url().'admin');
    } else {
      # code...
      $this->session->flashdata('error', 'Usuario y Contraseña invalidos');
      redirect(base_url() . 'login');
    }

  }else {
    # code...
    //false
    $this->index();
  }
}

public function logout()
{
  # code...
  $this->session->unset_userdata('user');
  $this->session->sess_destroy();
    redirect(base_url('login'));
}



}
 ?>
