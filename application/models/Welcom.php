<?php
    // Generar una herencia
    class Welcom extends CI_Model{


        //constructor
        function __construct()
        {
            $this->load->database();
            
        }

        // Insercion de  clientes en la BDD

        function Registro($datos){
            return $this->db->insert('login',$datos);
        }

        public function login($usuario, $contrasena) {
            $this->db->where('usuario', $usuario);
            $query = $this->db->get('login');
    
            if ($query->num_rows() === 1) {
                $user = $query->row();
                if (password_verify($contrasena, $user->contrasena)) {
                    return $user;
                }
            }
            return FALSE;
        }

        public function get_user_info($id_log) {
            $query = $this->db->get_where('login', array('id_log' => $id_log));
            return $query->row_array(); // Devuelve una fila de resultados como array
        }

    }
?>
