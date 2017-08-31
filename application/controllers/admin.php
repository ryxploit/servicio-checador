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
        $this->load->view('admin/prueba');
        echo '<a href="'. base_url('admin/logout') .'">cerrar session</a>';
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

}
