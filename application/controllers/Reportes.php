<?php

    //Definir la clase cliente (extends es la herencia que se le hace a la clase)

    class Reportes extends  My_Controller{
        //Contructor
        public function __construct(){
            parent::__construct();
            //Cargar el modelo Cliente            
        }
       
        public function reporteGeneral(){
            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Reportes/reporteGeneral');
            $this->load->view('footer');
        }
        
    }
?>