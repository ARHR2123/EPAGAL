<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class My_Controller extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('Usuario_model');

            // Cargar datos del usuario si está logueado
            if ($this->session->userdata('id_log')) {
                $data['usuario'] = $this->Usuario_model->get_usuario($this->session->userdata('id_log'));
                $this->load->vars($data); // Pasa los datos a todas las vistas
            }
        }
    }
?>