<?php

    //Definir la clase cliente (extends es la herencia que se le hace a la clase)

    class Rutas extends  My_Controller{
        //Contructor
        public function __construct(){
            parent::__construct();
            //Cargar el modelo Cliente
            $this->load->model('Ruta');
            
        }
       
        public function registroRu(){
        
            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Rutas/registroRu');
            $this->load->view('footer');
        }

        public function bddRu(){

            $rutas=$this->Ruta->obtenerDatos();

            $data['rutas']=$rutas;

            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Rutas/bddRu',$data);
            $this->load->view('footer');
        }

        public function reporteGeoRu(){

            $data['rutas']=$this->Ruta->obtenerDatos();

            //Relacionar con el index
            $this->load->view('header');
            $this->load->view('Rutas/reporteGeoRu',$data);
            $this->load->view('footer');
        }

        public function guardarDatos(){
            //Crear un arreglo, en php se define el dato con "$"
            $datos=array(
                'zona_ru'=>$this->input->post('zona_ru'),
                'latitudcr_ru'=>$this->input->post('latitudcr_ru'),
                'longitudcr_ru'=>$this->input->post('longitudcr_ru'),
                'latitudfr_ru'=>$this->input->post('latitudfr_ru'),
                'longitudfr_ru'=>$this->input->post('longitudfr_ru')
            );
            $this->Ruta->insertarRuta($datos);
            redirect('Rutas/registroRu');
        }

        public function eliminarDatos($id_ru){
            if($this->Ruta->eliminarPorId($id_ru)){
                redirect('Rutas/bddRu');
            }
            else{
                echo "! Error al eliminar !";
            }
        }
        
        public function ubicacion($id_ru){
            $data['ruta']=$this->Ruta->consultarPorId($id_ru);
            $this->load->view('header');
            $this->load->view('Rutas/ubicacion',$data); //LLamamos a que nos vizualice la funcion "$data"
            $this->load->view('footer');
        }
    }
?>