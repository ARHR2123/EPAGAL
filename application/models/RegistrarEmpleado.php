<?php
    // Generar una herencia
    class RegistrarEmpleado extends CI_Model{


        //constructor
        function __construct()
        {
            $this->load->database();
            
        }

        // Insercion de  clientes en la BDD

        function Registro($datos){
            return $this->db->insert('login',$datos);
        }

        public function get_empleados($id_log) {
            $query = $this->db->get_where('login', array('id_log' => $id_log));
            return $query->row_array();
        }

        function obtenerDatos(){

            //Declaramos una variable 

            $listadoRegistrarEmpleados=$this->db->get('login'); //select *from clientes  (La consulta que se esté haciendo)

            // Validar si es que hay datos o no

            if($listadoRegistrarEmpleados->num_rows()>0){ //El (num_rows) es el conteo de los datos 
                return $listadoRegistrarEmpleados->result(); // retornamos ell listado de rutas, en el caso de que si existan datos
            }
            else{
                return false; //No retorna nada cuando no existe datos
            }
        }

        function eliminarPorId($id_log){

            // Sentencia MYSQL -->  Delete from cliente where id_ru = 3

            // Sentencia de Active Record

            $this->db->where('id_log',$id_log);
            return $this->db->delete('login');
        }

    }
?>
