<?php
    // Generar una herencia
    class Contenedor extends CI_Model{
        //constructor
        function __construct()
        {
            parent::__construct();
            
        }

        // Insercion de  clientes en la BDD

        function insertarContenedor($datos){
            $this->db->insert('contenedores',$datos);
        }

        function obtenerDatos(){

            //Declaramos una variable 

            $listadoContenedores=$this->db->get('contenedores'); //select *from clientes  (La consulta que se esté haciendo)

            // Validar si es que hay datos o no

            if($listadoContenedores->num_rows()>0){ //El (num_rows) es el conteo de los datos 
                return $listadoContenedores->result(); // retornamos ell listado de rutas, en el caso de que si existan datos
            }
            else{
                return false; //No retorna nada cuando no existe datos
            }
        }

        // Función para eliminar los datos 

        function eliminarPorId($id_co){

            // Sentencia MYSQL -->  Delete from cliente where id_ru = 3

            // Sentencia de Active Record

            $this->db->where('id_co',$id_co);
            return $this->db->delete('contenedores');
        }

        function consultarPorId($id_co){
            $this->db->where('id_co',$id_co);
            $contenedores=$this->db->get('contenedores');

            //Validando que el cliente consultado exista 

            if($contenedores->num_rows()>0){ //El (num_rows) es el conteo de los datos 
                return $contenedores->row(); // Cuando  SI EXISTE el cliente --> 'row' --> fila solo la fila 'result' --> bastantes registros
            }
            else{
                return false; //Cuando no EXISTE el Cliente
            }
        }

    }
?>
