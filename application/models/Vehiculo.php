<?php
    // Generar una herencia
    class Vehiculo extends CI_Model{
        //constructor
        function __construct()
        {
            parent::__construct();
            
        }

        function obtenerDatos(){

            $listadoVehiculos=$this->db->get('vehiculo'); 

            if($listadoVehiculos->num_rows()>0){ 
                return $listadoVehiculos->result(); 
            }
            else{
                return false; 
            }
        }


        public function insertarVehiculo($datos){
            return $this->db->insert('vehiculo', $datos);
        }
    
        public function eliminarPorId($id_vehi){
            $this->db->where('id_vehi', $id_vehi);
            return $this->db->delete('vehiculo');
        }
    }
?>