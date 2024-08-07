<?php
    class Vehiculos extends  My_Controller{
        //Contructor
        public function __construct(){
            parent::__construct();
            //Cargar el modelo Cliente
            $this->load->model('Vehiculo');
            $this->load->model('Ruta');
        }
       
        public function registroC(){

            $rutas=$this->Ruta->obtenerDatos();

            $data['rutas']=$rutas;

            $this->load->view('header');
            $this->load->view('Vehiculos/registroC', $data);
            $this->load->view('footer');
        }

        public function bddC(){

            $vehiculos=$this->Vehiculo->obtenerDatos();

            $data['vehiculos']=$vehiculos;

            $this->load->view('header');
            $this->load->view('Vehiculos/bddC', $data);
            $this->load->view('footer');
        }

        public function guardarDatos(){
            $datos = array(
                'tipo_vehi' => $this->input->post('tipo_vehi'),
                'color_vehi' => $this->input->post('color_vehi'),
                'placa_vehi' => $this->input->post('placa_vehi'),
                'id_fk_vehi' => $this->input->post('id_fk_vehi')
            );
            $this->Vehiculo->insertarVehiculo($datos);
            redirect('Vehiculos/registroC');
        }
        
        public function eliminarDatos($id_vehi){
            if($this->Vehiculo->eliminarPorId($id_vehi)){
                redirect('Vehiculos/bddC');
            } else {
                echo "! Error al eliminar !";
            }
        } 
    }
?>