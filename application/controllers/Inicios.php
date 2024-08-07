<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    //Definir la clase cliente (extends es la herencia que se le hace a la clase)

    class Inicios extends My_Controller {
        //Contructor
        public function __construct(){
            parent::__construct();

            $this->load->model('Usuario_model');


        }
       
        public function login(){

            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Inicios/login');
            $this->load->view('footer');
        }
        
    }
?>