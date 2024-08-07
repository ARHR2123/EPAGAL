<?php
    // Generar una herencia
    class Ruta extends CI_Model{
        //constructor
        function __construct()
        {
            parent::__construct();
            
        }

        // Insercion de  clientes en la BDD

        function insertarRuta($datos){
            $this->db->insert('ruta',$datos);
        }

        function obtenerDatos(){

            //Declaramos una variable 

            $listadoRutas=$this->db->get('ruta'); //select *from clientes  (La consulta que se esté haciendo)

            // Validar si es que hay datos o no

            if($listadoRutas->num_rows()>0){ //El (num_rows) es el conteo de los datos 
                return $listadoRutas->result(); // retornamos ell listado de rutas, en el caso de que si existan datos
            }
            else{
                return false; //No retorna nada cuando no existe datos
            }
        }

        // Función para eliminar los datos 

        function eliminarPorId($id_ru){

            // Sentencia MYSQL -->  Delete from cliente where id_ru = 3

            // Sentencia de Active Record

            $this->db->where('id_ru',$id_ru);
            return $this->db->delete('ruta');
        }

        function consultarPorId($id_ru){
            $this->db->where('id_ru',$id_ru);
            $ruta=$this->db->get('ruta');

            //Validando que el cliente consultado exista 

            if($ruta->num_rows()>0){ //El (num_rows) es el conteo de los datos 
                return $ruta->row(); // Cuando  SI EXISTE el cliente --> 'row' --> fila solo la fila 'result' --> bastantes registros
            }
            else{
                return false; //Cuando no EXISTE el Cliente
            }
        }
    }
?>