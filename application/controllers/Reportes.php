<?php

    //Definir la clase cliente (extends es la herencia que se le hace a la clase)

    class Reportes extends  My_Controller{
        //Contructor
        public function __construct(){
            parent::__construct();
            
            $this->load->model('Contenedor');
            $this->load->model('Empleado');


        }
       
        public function reporteGeneral(){

            $recorridos=$this->Empleado->obtenerDatos();

            $data['recorridos']=$recorridos;


            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Reportes/reporteGeneral', $data);
            $this->load->view('footer');
        }

        public function registroContenidos(){

            $contenedores=$this->Contenedor->obtenerDatos();

            $data['contenedores']=$contenedores;

            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Reportes/registroContenidos', $data);
            $this->load->view('footer');
        }

        public function Reporte($id_rep){

            $data['recorrido']=$this->Empleado->consultarPorId($id_rep);

            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Reportes/Reporte', $data);
            $this->load->view('footer');
        }
        
    }
?>