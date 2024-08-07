<?php

    //Definir la clase cliente (extends es la herencia que se le hace a la clase)

    class Registros extends  My_Controller{
        //Contructor
        public function __construct(){
            parent::__construct();
            //Cargar el modelo Cliente
            $this->load->model('Registro');
            
        }
       
        public function registros(){
            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Registros/registros');
            $this->load->view('footer');
        }

        public function bdd(){
            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Registros/bdd');
            $this->load->view('footer');
        }
        public function reporteGeo(){
            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Registros/reporteGeo');
            $this->load->view('footer');
        }

        public function guardar(){
            //Crear un arreglo, en php se define el dato con "$"
            $datos=array(
                'cedula_cli'=>$this->input->post('cedula_cli'),
                'apellido_cli'=>$this->input->post('apellido_cli'),
                'nombre_cli'=>$this->input->post('nombre_cli'),
                'latitud_cli'=>$this->input->post('latitud_cli'),
                'longitud_cli'=>$this->input->post('longitud_cli')
            );
            //print_r($datos);
            $this->Registro->insertarRegistro($datos);
            redirect('Registros/registros');
        }
        
    }
?>