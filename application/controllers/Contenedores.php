<?php

//Definir la clase cliente (extends es la herencia que se le hace a la clase)

class Contenedores extends  My_Controller
{
    //Contructor
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');

        //Cargar el modelo Cliente

        $this->load->model('Contenedor');
        $this->load->model('Ruta');
        $this->load->library('session');
    }

    public function registroCo()
    {

        $rutas = $this->Ruta->obtenerDatos();

        $data['rutas'] = $rutas;

        $this->load->view('header');
        $this->load->view('Contenedores/registroCo', $data);
        $this->load->view('footer');
    }

    public function bddCo()
    {


        $contenedores = $this->Contenedor->obtenerDatos();

        $data['contenedores'] = $contenedores;

        $this->load->view('header');
        $this->load->view('Contenedores/bddCo', $data);
        $this->load->view('footer');
    }

    public function reporteGeoCo()
    {

        $data['contenedores'] = $this->Contenedor->obtenerDatos();


        $this->load->view('header');
        $this->load->view('Contenedores/reporteGeoCo', $data);
        $this->load->view('footer');
    }

    public function guardarDatos()
    {

        $datos = array(
            'identificador_co' => $this->input->post('identificador_co'),
            'zona_ru' => $this->input->post('zona_ru'),
            'latitud_co' => $this->input->post('latitud_co'),
            'longitud_co' => $this->input->post('longitud_co')
        );
        $this->Contenedor->insertarContenedor($datos);
        redirect('Contenedores/registroCo');


    }

    public function check_identificador_co($identificador_co)
    {
        if ($this->Contenedor->identificador_exists($identificador_co)) {
            $this->form_validation->set_message('check_identificador_co', 'El identificador ya existe Cambie.');
            return FALSE;
        }
        return TRUE;
    }

    public function eliminarDatos($id_co)
    {
        if ($this->Contenedor->eliminarPorId($id_co)) {
            redirect('Contenedores/bddCo');
        } else {
            echo "! Error al eliminar !";
        }
    }

    public function ubicacion($id_co)
    {
        $data['contenedor'] = $this->Contenedor->consultarPorId($id_co);
        $this->load->view('header');
        $this->load->view('Contenedores/ubicacion', $data);
        $this->load->view('footer');
    }
}
