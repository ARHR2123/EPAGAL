<?php
    // Generar una herencia
    class Registro extends CI_Model{
        //constructor
        function __construct()
        {
            parent::__construct();
            
        }

        // Insercion de  clientes en la BDD

        function insertarRegistro($datos){
            $this->db->insert('registros',$datos);
        }
    }
?>