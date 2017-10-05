<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Principal extends CI_Controller
{

  function index()
  {
    # code...
    $this->load->model('madmin');
    $data['fetch'] = $this->madmin->fetch();
    $this->load->View('vPrincipal', $data);
  }

  public function time()
  {
    # code...
    $this->form_validation->set_rules('provider', 'Prestador', 'required');

    if ($this->form_validation->run()) {
      # code...true
        date_default_timezone_set('America/Mazatlan');

      $data_start = array(
        'id_providers' => $this->input->post('provider') ,
        'time_start' => date("Y-m-d H:i")
      );

      $data_end = array(
        'id_providers' => $this->input->post('provider') ,
        'time_end' => date("Y-m-d H:i")
      );

      if ( $this->input->post('provider') == 'demo') {
        # code...
        $this->session->set_flashdata('msj', '<div class="alert alert-danger col-md-5 text-center" role="alert">Selecciona tu nombre</div');
        redirect (base_url());
      }

    $this->load->model('mprincipal');
    $comparacion =  $this->mprincipal->insert($data_start,$data_end);
    $date = date("g:i a");

    if ($comparacion == 1) {
      # code...
      $this->session->set_flashdata('msj', '<div class="alert alert-danger col-md-5 text-center" role="alert">Checaste entrada alas <strong>'.'   '.$date.'</strong></div');
      redirect (base_url());
    } elseif ($comparacion['dos'] == 2) {
      # code...
      $this->session->set_flashdata('msj', '<div class="alert alert-danger col-md-5 text-center" role="alert">Checaste salida alas <strong>'.'   '.$date.' </strong>  '.'Te faltan <strong>  '.$comparacion['restante'].'</strong></div');
      redirect (base_url());
    } elseif ($comparacion == 3) {
      # code...
      $this->session->set_flashdata('msj', '<div class="alert alert-danger col-md-5 text-center" role="alert">Ya Checaste salida no puedes checar dos veces </div');
      redirect (base_url());
    } else {
      # code...
    }

    }else {
      # code...
      $this->index();
    }
  }

}
 ?>
