<?php

    class Dashboard extends  My_Controller{

        public function __construct(){
            parent::__construct();            
        }
       
        public function dashboard(){
            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Dashboard/dashboard');
            $this->load->view('footer');
        }
        
    }
?>